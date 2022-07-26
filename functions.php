<?php 
define("DEVELOPMENT", TRUE);

function dbConnect(){
  $db = new mysqli("localhost","root","","coursepedia");
  return $db;
}

function showError($message) {
  echo "<script>alert('$message');</script>";
}

function nav(){
  ?>
  <nav class="navbar">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand">
        <img src="./assets/logo-cp-black.png" alt="logo" width="35" class="d-inline-block align-text-top">
        Coursepedia
      </a>
          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="nav-item">
        <a href="login.php" class="text-muted nav-link">Login</a>
      </li>
      <li class="nav-item">
        <a href="belajar.php" class="text-muted nav-link">Belajar</a>
      </li>
    </ul>
    </div>
  </nav>
  <?php  
}

function footer(){
  ?>
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="index.php" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      </a>
      <span class="mb-3 mb-md-0 text-muted">
        &copy; 2020 Coursepedia
      </span>
    </div>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="nav-item">
        <a href="#" class="nav-link text-muted">Privacy Policy</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-muted">Terms of Use</a>
      </li>
    </ul>
  </footer>
  <?php
}

?>