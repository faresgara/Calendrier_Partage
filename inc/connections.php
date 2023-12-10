<?php
$conn = mysqli_connect('localhost','root','','federe');//fel xamp par defaut yaatik el username mtaa el bd root o el pass fere4
if(!$conn){
    die('Error'.mysqli_connect_error());
}

?>