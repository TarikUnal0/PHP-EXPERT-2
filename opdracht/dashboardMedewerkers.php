<?php
session_start();
require "menu.html";
include "db.conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="table table-striped table-dark">
            <div class="card-head">
                <h3>Klanten</h3>
            </div>
            <table class="table table-striped table-dark">
                <tr>
                    <th scope="col">Voornaam</th>
                    <th scope="col">Achternaam</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefoonnummer</th>
                    <th scope="col">Bewerken</th>

                </tr>
                <?php
                $stmttasks = $db_conn->prepare("SELECT * FROM klant");
                $stmttasks->execute();
                foreach ($stmttasks as $rows) {
                    $uid = $rows['id'];
                    echo "<tr><td>" . $rows['voornaam'] . "</td>";
                    echo "<td>" . $rows['achternaam'] . "</td>";
                    echo "<td>" . $rows['email'] . "</td>";
                    echo "<td>" . $rows['telefoonnummer'] . "</td>";
                    echo "<td><a class='btn btn-success' href='verwijderKlant.php?id=$uid'> Verwijder </i></a>";
                    echo "<a class='btn btn-success' href='updateKlant.php?id=$uid'> Wijzigen</i></a>";
                    echo "<a class='btn btn-success' href='addKlant.php'> Toevoegen</i></a></td></tr>";
                }
                ?>
            </table>
        </div>


        <div class="table table-striped table-dark">
            <div class="card-head">
                <h3>Fiets</h3>
            </div>
            <table class="table table-striped table-dark">
                <tr>
                    <th scope="col">Merk</th>
                    <th scope="col">Model</th>
                    <th scope="col">Type</th>
                    <th scope="col">Kleur</th>
                    <th scope="col">Remsoort</th>
                    <th scope="col">Bewerken</th>
                </tr>
                <?php
                $stmttasks = $db_conn->prepare("SELECT * FROM fiets");
                $stmttasks->execute();
                foreach ($stmttasks as $rows) {
                    $fid = $rows['id'];
                    echo "<tr><td>" . $rows['merk'] . "</td>";
                    echo "<td>" . $rows['model'] . "</td>";
                    echo "<td>" . $rows['type'] . "</td>";
                    echo "<td>" . $rows['kleur'] . "</td>";
                    echo "<td>" . $rows['remsoort'] . "</td>";
                    echo "<td><a class='btn btn-success' href='verwijderFiets.php?id=$fid'>Verwijder </i></a>";
                    echo "<a class='btn btn-success' href='updateFiets.php?id=$fid'>Wijzigen </i></a>";
                    echo "<a class='btn btn-success' href='addFiets.php'>Toevoegen </i></a></td></tr>";
                }
                ?>
            </table>
        </div>


        <div class="table table-striped table-dark">
            <div class="card-head">
                <h3>Reperatie</h3>
            </div>
            <table class="table table-striped table-dark">
                <tr>
                    <th scope="col">Titel</th>
                    <th scope="col">Datum & Tijd</th>
                    <th scope="col">Opmerkingen</th>
                    <th scope="col">Kosten</th>
                    <th scope="col">Bewerken</th>
                </tr>
                <?php
                $stmttasks = $db_conn->prepare("SELECT * FROM reperatie");
                $stmttasks->execute();
                foreach ($stmttasks as $rows) {
                    $rid = $rows['id'];
                    echo "<tr><td>" . $rows['titel'] . "</td>";
                    echo "<td>" . $rows['datumtijd'] . "</td>";
                    echo "<td>" . $rows['opmerkingen'] . "</td>";
                    echo "<td>" . $rows['kosten'] . "</td>";

                    echo "<td><a class='btn btn-success' href='verwijderReperatie.php?id=$rid'>Verwijder </i></a>";
                    echo "<a class='btn btn-success' href='updateReperatie.php?id=$rid'>Wijzigen </i></a>";
                    echo "<a class='btn btn-success' href='addReperatie.php?id=$rid'>Toevoegen </i></a></td></tr>";
                }
                ?>
            </table>
        </div>
</body>

</html>