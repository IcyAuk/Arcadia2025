<?php 
    require "lib/config.php";
    require "lib/pdo.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcadia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="index.php" class="navbar-brand">Arcadia</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.php" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="sectors.php" class="nav-link">Habitats</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Nous Contacter</a>
                    </li>
                </ul>
                    <ul class="navbar-nav ms-auto">
                    <?php
                    if (isset($_SESSION['user_id'])){ ?>
                        
                        <li class="nav-item">
                        <a href="admin/dashboard.php" class="nav-link">Dashboard</a>
                        </li>
                        
                        <li class="nav-item">
                        <a href="logout.php" class="nav-link">Déconnexion</a>
                        </li>

                    <?php } else { ?>
                        
                        <li class="nav-item">
                        <a href="login.php" class="nav-link">Connexion</a>
                        </li>
                        <?php } ?>
                    
                    </ul>
                
            </div>
        </div>
    </nav>

    <div class="pb-5"></div>