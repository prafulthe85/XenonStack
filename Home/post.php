<?php

include "../database.php";
$name = $_POST['Name'];
$Email = $_POST['Email'];
$phone = $_POST['Phone'];
$add = $_POST['Address'];
$msg = $_POST['msg'];


echo $sql = "insert into contactus (Name, emailid, contactno, city, message) 
values('$name', '$Email', '$phone', '$add', '$msg')";

$result = $conn->query($sql);

if($result === true){
    echo "We will reach out to you shortly";
}
else{
    echo"Failed";
}

?>