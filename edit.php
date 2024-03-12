<?php
require_once "autoloader.php";

$connection = new Connection();
$conn = $connection->getConn();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id = isset($_GET['id']) ? $_GET['id'] : null;

$query = "SELECT 'company' FROM 'investemnt' WHERE 'id'=$id";
$result = $conn->query($query);
$companyform=$result->fetch_array(MYSQLI_NUM);
$result->close();

$query = "SELECT 'investment' FROM 'investemnt' WHERE 'id'=$id";
$result = $conn->query($query);
$investmentform=$result->fetch_array(MYSQLI_NUM);
$result->close();

$query = "SELECT 'investment' FROM 'investemnt' WHERE 'id'=$id";
$result = $conn->query($query);
$investmentform=$result->fetch_array(MYSQLI_NUM);
$result->close();

$query = "SELECT 'date' FROM 'investemnt' WHERE 'id'=$id";
$result = $conn->query($query);
$dateform=$result->fetch_array(MYSQLI_NUM);
$result->close();

$query = "SELECT 'active' FROM 'investemnt' WHERE 'id'=$id";
$result = $conn->query($query);
$activeform=$result->fetch_array(MYSQLI_NUM);
$result->close(

    

);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Campos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5%;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            font-family: Arial, sans-serif;
            font-size: 35px;
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>Actualizar Campos</h1>
    <form id="form_x" class="class_x" method="post" action="edit.php?id=<?= $id ?>">
        <label for="Id">Id:</label>
        <input type="text" id="Id" name="Id" value="<?=  $conn->$companyform  ; ?>" readonly>

        <label for="company">Company:</label>
        <input type="text" id="company" name="company" value="<?= $conn->$companyform; ?>">

        <label for="Investment">Investment:</label>
        <input type="number" id="investment" name="investment" value="<?=  $conn->$investmentform ; ?>">

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?=  $conn->$dateorm ; ?>">

        <label for="active">Active:</label>
        <select id="active" name="active">
            
        <option value="True" <?= $conn ->$activeform == 'True' ? 'selected' : ''; ?>>Yes</option>
      
        </select>

        <button type="submit">Guardar Cambios</button>
    </form>
</body>

</html>
