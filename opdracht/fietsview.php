<?php
session_start();
error_reporting(0);
require "menuKlant.html";
include "db.conn.php";
$fiets_id = $_GET['id'];
$stmt = $db_conn->prepare("SELECT * FROM fiets WHERE id = '$fiets_id'");
$stmt->execute();

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
                <h3>Fiets</h3>
            </div>
            <table class="table table-striped table-dark">
                <tr>
                    <th>titel</th>
                    <th>datum & tijd</th>
                    <th>opmerkingen</th>
                    <th>kosten</th>


                </tr>

                <?php
                $stmttasks = $db_conn->prepare("SELECT * FROM reperatie WHERE fiets_id = '$fiets_id'");
                $stmttasks->execute();
                foreach ($stmttasks as $rows) {

                    $idname = $rows['id'];
                    echo "<tr><td>" . $rows['titel'] . "</td>";
                    echo "<td>" . $rows['datumtijd'] . "</td>";
                    echo "<td>" . $rows['opmerkingen'] . "</td>";
                    echo "<td>" . $rows['kosten'] . "</td></tr>";
                }
                ?>

            </table>
        </div>
    </div>
</body>

</html>

<?php
