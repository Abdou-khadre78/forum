<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/public/css/style.css">
  </head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
    <img class="img" src="/public/img/football-background.jpg" alt="Bootstrap" width="150" height="144">
    <a href="/">Home</a>
    <?php
            if(isset($_SESSION['user'])){
                ?>
                  <a href="/deconnection">Déconnection</a>
                  <?php
                  if($_SESSION['user']['role'] == 'Admin'){
                    ?>
                     <a href="/users">Utilisateurs</a>
                     <a href="/subject">Ajout sujet</a>
                    <?php
                  }
            }else{
              ?>
                <a href="/register">Inscription</a>
                <a href="/connection">Connection</a>
              <?php
            }
                  ?>
  </div>
</nav>
