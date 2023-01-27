<?php
function dbconnect(){
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "categoriastres_snippet";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

if($conn->connect_error){
die("La conexion ha fallado: ".$conn->connect_error);
}

return $conn;
}
?>