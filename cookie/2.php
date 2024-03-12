<?php
if (!isset($_COOKIE["marcos"])){
    echo "La cookie Marcos no esta disponible";
}else{
    echo "Valor " . $_COOKIE["marcos"];
    }

?>