<?php

include "../Database.php";
$name = $_POST['Name'];
$Email = $_POST['Email'];
$phone = $_POST['Phone'];
$add = $_POST['Address'];
$msg = $_POST['msg'];


echo $sql = "insert into contact (Name, Email, Phone, Address, Enquiry) 
values('$name', '$Email', '$phone', '$add', '$msg')";

$result = $conn->query($sql);

if($result === true){
    echo "We will reach out to you shortly";
    header("location:index.php");
}
else{
    echo"Failed";
}

?>