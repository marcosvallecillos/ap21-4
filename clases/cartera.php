<?php

class Cartera
{
    private $clients = [];


    public function getClient($id)
    {
        foreach ($this->clients as $client) {
            if ($client->getId() == $id)
                return $client;
        }
        return new Empresa(null, null, null, null, null);
    }

   


    public function delete($conn, $id)
    {
         $conn = new mysqli('db', 'root', 'test', "ap21");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("DELETE FROM Visits WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function update($datos)
    {
       
    }

    
    public function drawList()
    {
        $conn = new mysqli('db', 'root', 'test', "ap21");
                
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $query = 'SELECT * From investment';
        $result = mysqli_query($conn, $query);

        echo '<table class="table table-striped">';
        echo '<tr>
                <th>Id</th>
                <th>Company</th>
                <th>Investment</th>
                <th>Date</th>
                <th>Active</th>
                <th colspan="3">Actions

                </th>
            </tr>';

        
      
        while($value = $result->fetch_array(MYSQLI_ASSOC)){
            echo '<tr>';
            foreach($value as $element){
                echo '<td>' . $element .
                '</td>';
                
            }
            echo '<td>  <img src="img/delete.gif" width="25"></a></td>';
            echo '<td><img src="img/edit.gif" width="25"><td>';
            echo '</tr>';
        }
        echo '</table>';

        $result->close();
        mysqli_close($conn);
    }
}
