<?php require "template/header.php" ?>

<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

<div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1>Bienvenue sur Arcadia</h1>
            </div>
        </div>
    </div>

<?php require "template/footer.php" ?>