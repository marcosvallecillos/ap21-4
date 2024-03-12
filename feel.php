<?php
require_once "autoloader.php";
$connection = new Connection();
$conn= $connection->getConn();
                

for ($i = 1; $i <=100; $i++) {
    $id = $i ;
    $company = "Empresa " . $i ;
    $investment = rand(10000, 1000000); 
    $date = 2024-03-07;
    $active = rand(0,1);

    $query = "INSERT INTO `investment`(Id, company, investment, date, active) 
    VALUES (`id`, `company`, `investment`, `date`, `active`)";

mysqli_query($conn, $query);
$result = $conn ->query($query);

}

?>

