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
            $merkv = $_POST['merk'];
            $modelv = $_POST['model'];
            $typev = $_POST['type'];
            $kleurv = $_POST['kleur'];
            $remsoortv = $_POST['remsoort'];
            $stmt = $db_conn->prepare("UPDATE fiets SET merk=:ph_merk, model=:ph_model, type=:ph_type, kleur=:ph_kleur, remsoort=:ph_remsoort WHERE id = :ph_id");
            $stmt->bindParam(":ph_id", $user);
            $stmt->bindParam(":ph_merk", $merkv);
            $stmt->bindParam(":ph_model", $modelv);
            $stmt->bindParam(":ph_type", $typev);
            $stmt->bindParam(":ph_kleur", $kleurv);
            $stmt->bindParam(":ph_remsoort", $remsoortv);
            $stmt->execute();
        }


        $sql = "SELECT * FROM fiets WHERE id = :ph_user";
        $statement = $db_conn->prepare($sql);
        $statement->bindParam(":ph_user", $user);
        $statement->execute();
        $database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);


        ?>

        <form method="post" action=" ">
            <h1 class="sign" align="center">Update</h1>
            <div class="form-group">
                <label for="merk">Merk</label>
                <input type="text" name="merk" id="merk" value="<?php echo $database_gegevens['merk'] ?>"><br>
                <label for="model">model</label>
                <input type="text" name="model" id="model" value="<?php echo $database_gegevens['model'] ?>"><br>
                <label for="type">type</label>
                <input type="text" name="type" id="type" value="<?php echo $database_gegevens['type'] ?>"><br>
                <label for="kleur">kleur</label>
                <input type="text" name="kleur" id="kleur" value="<?php echo $database_gegevens['kleur'] ?>"><br>
                <label for="remsoort">remsoort</label>
                <input type="text" name="remsoort" id="remsoort" value="<?php echo $database_gegevens['remsoort'] ?>">
                <button class="submit" name="form_update" type="submit">Update</button>
            </div>


        </form>
    </main>

</body>

</html>