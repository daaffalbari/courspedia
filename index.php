<?php
include_once("functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="mt-3 mx-5">
  <?php nav(); ?>
  <div class="container">
    <div class="row ">
      <div class="col-7">
        <div class="text-center">
          <img src="./assets/computer.png" alt="gambar_komputer" width="250">
          <h1 class="">Situs Belajar No.1 di Dunia!!!</h1>
          <h4 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nisi? Tempore odit ducimus molestiae. Odio at eum perspiciatis sit quod!</h4>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Xxq2siSx8C0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-5">
        <form action="register.php" name="daftar-akun">

        </form>
      </div>
    </div>
  </div>
  <?php footer(); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>