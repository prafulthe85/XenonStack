<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "xs";

$conn = new mysqli($server, $username, $password, $database);

if($conn -> connect_error){
    echo "failed";
}
else


?>