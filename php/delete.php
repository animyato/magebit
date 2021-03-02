<?php
include_once 'db.php';

$emailID = $_GET['emailID'];
$sql = "DELETE FROM email WHERE ID = '$emailID';";

mysqli_query($conn, $sql);
header("Location: ../data.php");

 ?>
