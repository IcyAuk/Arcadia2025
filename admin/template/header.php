<?php
    // ADMIN FOLDER ONLY ACCESSIBLE BY REGISTERED ACCOUNTS
    require "../lib/config.php";
    require "../lib/pdo.php";
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login.php");
        exit();
    }

?>

<!DOCTYPE HTML>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="viewarticles.php">View Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">View Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="messages.php">View Contact Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="staff.php">View Staff Members</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">Deconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="pb-5"></div>