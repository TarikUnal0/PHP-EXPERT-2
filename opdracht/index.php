<?php
include "db.conn.php";
if (isset($_POST['form_login'])) {

    $email = $_POST['form_email'];
    $password = $_POST['form_password'];

    $sql = "SELECT * FROM medewerkers WHERE email = :ph_email";
    $statement = $db_conn->prepare($sql);
    $statement->bindParam(":ph_email", $email);
    $statement->execute();
    $database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);

    if ($database_gegevens['password'] == $password) {
        echo 'Gebruiker mag inloggen!';

        session_start();
        $_SESSION['name'] = $database_gegevens['name'];
        $_SESSION['email'] = $database_gegevens['email'];
        $_SESSION['id'] = $database_gegevens['id'];
        header("location: dashboardMedewerkers.php");
    }
}
if (isset($_POST['form_login'])) {

    $email = $_POST['form_email'];
    $password = $_POST['form_password'];

    $sql = "SELECT * FROM klant WHERE email = :ph_email";
    $statement = $db_conn->prepare($sql);
    $statement->bindParam(":ph_email", $email);
    $statement->execute();
    $database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);

    if ($database_gegevens['password'] == $password) {
        echo 'Gebruiker mag inloggen!';

        session_start();
        $_SESSION['name'] = $database_gegevens['name'];
        $_SESSION['email'] = $database_gegevens['email'];
        $_SESSION['id'] = $database_gegevens['id'];
        header("location: dashboard.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <main class="main">
        <form method="post" action=" ">
            <h1 class="sign" align="center">Please sign in</h1>


            <input type="text" id="form_email" class="un" name="form_email" placeholder="Email address" required autofocus>


            <input type="password" id="form_password" class="pass" name="form_password" placeholder="Password" required>
            <button class="submit" name="form_login" type="submit">Sign in</button>

        </form>
    </main>
</body>

</html>