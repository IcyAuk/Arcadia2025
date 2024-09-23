<?php
require_once "lib/pdo.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["create_admin"])) {
    $first_name = "José";
    $last_name = "Smith";
    $email = "vince@arcadia.com";
    $password = password_hash("1234", PASSWORD_BCRYPT);
    $is_admin = true;

    try {
        // Insert the admin record into the staff table
        $sql = "INSERT INTO users (first_name, last_name, email, password, is_admin)
        VALUES (:first_name, :last_name, :email, :password, :is_admin)";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':is_admin', $is_admin);
        $stmt->execute();
        echo "Admin created successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        die();
    }

        /* THIS IS FOR REGISTERING NEW USERS
    $to = $email;
    $subject = "Password Admin";
    $message = "Nom d'utilisateur: $email";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
        */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Admin</title>
</head>
<body>
    <form action="" method="post">
        <button type="submit" name="create_admin">Create Admin</button>
    </form>
</body>
</html>
