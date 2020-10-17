<?php 
Require 'fungsi.php';
$anjay = kuari("SELECT * FROM daftar ORDER BY hasil DESC");

if (isset($_POST["cari"])) {
  $anjay = cari($_POST["key"]);
}
 ?>



 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>info scrim</title>
     <link rel="icon" href="nobit.jpeg">
  </head>
  <body>
  <nav class="navbar navbar-light bg-light justify-content-between">
  <a class="navbar-brand">nobit</a>
  <h1>scrim</h1>
  <form class="form-inline" method="post">
    <input size="10px;" autocomplete="off" class="form-control mr-sm-2" type="text" placeholder="masukan nama" aria-label="Search" name="key">
    <button type="submit" name="cari" class="btn btn-primary">Primary</button>
  </form>
</nav>
<table class="table table-dark">
    <tr>
      <th>no</th>
      <th>clan</th>
      <th>poin</th>
      <th>kill</th>
      <th>hasil</th>
    </tr>
    <?php $tambah = 1; ?>
    <?php foreach ($anjay as $row) : ?>
    <tr>
      <td><?= $tambah ?></td>
      <td><?= $row["clan"]; ?></td>
      <td><?= $row["point"]; ?></td>
      <td><?php echo $row["kil"] ?></td>
      <td><?php echo $row["hasil"] ?></td>
      

    </tr>
    <?php $tambah++; ?>
  <?php endforeach; ?>
  </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>