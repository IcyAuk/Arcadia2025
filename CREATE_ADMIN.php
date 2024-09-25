<!--
CREATE FIRST ADMIN
DELETE THIS PHP FILE AFTER SUCCESSFULLY USING IT.
-->

<?php include_once "template/header.php"; ?>

<!-- FORM SECTION -->
<section class="section-contained column rounded">
    <form method="post" class="section-form" action="#">

            <legend>créer un admin</legend>
            <input type="submit">
    </form>
</section>


<?php include_once "template/footer.php"; ?>

<?php

// createAdmin()
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = 'JoseArcadia';
    $email = 'JoseArcadia@test.com';
    $password = '012340';

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare
    (
        'INSERT INTO staff (name, email, password, role) VALUES (?,?,?,?)'
    );
    if($stmt->execute([$username, $email, $hashed_password, "admin"])){
        echo "ADMIN CREATED";
    }
    
}

?>