<?php
session_start();
error_reporting(0);
require "menu.html";
include "db.conn.php";
$user = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="CSS/login.css" <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <main class="main">
        <?php

        if (isset($_POST['form_update'])) {
            $voornaamv = $_POST['voornaam'];
            $achternaamv = $_POST['achternaam'];
            $emailv = $_POST['email'];
            $telefoonv = $_POST['telefoonnummer'];
            $passwordv = $_POST['password'];
            $sql = "INSERT INTO klant (voornaam, achternaam, email, telefoonnummer, password) VALUES (:ph_voornaam,:ph_achternaam,:ph_email,:ph_telefoon, :ph_password)";
            $stmt = $db_conn->prepare($sql);
            $stmt->bindParam(":ph_voornaam", $voornaamv);
            $stmt->bindParam(":ph_achternaam", $achternaamv);
            $stmt->bindParam(":ph_email", $emailv);
            $stmt->bindParam(":ph_telefoon", $telefoonv);
            $stmt->bindParam(":ph_password", $passwordv);
            header("location: dashboardMedewerkers.php");
            $stmt->execute();
        }


        ?>

        <form method="post" action=" ">
            <h1 class="sign" align="center">Voeg Klant Toe</h1>
            <div class="form-group">
                <label for="voornaam">Voornaam</label>
                <input type="text" name="voornaam" id="voornaam"><br>
                <label for="achternaam">Achternaam</label>
                <input type="text" name="achternaam" id="achternaam" value="<?php echo $database_gegevens['achternaam'] ?>"><br>
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" value="<?php echo $database_gegevens['email'] ?>"><br>
                <label for="telefoonnummer">telefoonnummer</label>
                <input type="text" name="telefoonnummer" id="telefoonnummer" value="<?php echo $database_gegevens['telefoonnummer'] ?>"><br>
                <label for="password">Wachtwoord</label>
                <input type="text" name="password" id="password" value="<?php echo $database_gegevens['password'] ?>">
                <button class="submit" name="form_update" type="submit">Voeg Toe</button>
            </div>


        </form>
    </main>

</body>

</html>