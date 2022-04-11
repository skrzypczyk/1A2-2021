<?php
  session_start();
  require "functions.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">


    <a class="navbar-brand" href="index.php">Mon site</a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>





    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


        <?php if(isConnected()){ ?>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Se déconnecter</a>
        </li>

      <?php }else{ ?>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="login.php">Se connecter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">S'inscrire</a>
        </li>

      <?php } ?>


      </ul>
     
    </div>
  </div>
</nav>


  	<div class="container">