<?php
session_start();
include "db.conn.php";
session_start();
$uid = $_GET['id'];

$sql = "DELETE FROM klant WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql); //stuur naar mysql.
$stmt->bindParam(":ph_id", $uid);
header("location:dashboardMedewerkers.php");
$stmt->execute();
