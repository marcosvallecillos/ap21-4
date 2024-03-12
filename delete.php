<?php 
require_once "autoloader.php";
$connection= new Connection();
$conn = $connection->getConn();
$id = $_GET['id'];
$query = "DELETE FROM investment WHERE id = '$id'";
$conn->query($query);
    var_dump($conn);
$conn->close();
header("location: index.php");