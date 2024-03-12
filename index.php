<?php
require_once "autoloader.php";
$connection= new Connection();
$conn = $connection->getConn();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        table th {
            border: 2px solid black;
        }

        table.redTable {
            border: 2px solid lightgray;
            background-color: lightgray;
            width: 100%;
            text-align: center;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table class="redTable">
        <thead>
            <tr>
                <td colspan="7">
                    <div> <a href="insert.php"><img src="img/add.JPG" width="25"></a> </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = 'SELECT * FROM investment';
            $result = $conn->query($query);

            echo '<table class="table table-striped">';
            echo '<tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="3">Actions</th>
            </tr>';

            for($i=0;$i<6;$i++){
                $result->data_seek($i);
                $value=$result->fetch_array(MYSQLI_ASSOC);

                echo '<tr>';
                foreach($value as $element){
                    echo '<td>' . $element . '</td>';
                }

                echo "<td><a href='delete.php?id='><img src='img/delete.gif' width='25'></a></td>";
                echo "<td><a href='edit.php?id='><img src='img/edit.gif' width='25'></a></td>";
                echo '</tr>';          
                //. $value["id"] .//
            }

            $result->close();
            ?>
        </tbody>
    </table>
</body>

</html>
