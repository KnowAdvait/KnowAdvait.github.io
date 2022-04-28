<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'data';

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    echo "Connection Successful";
}else{
    echo "Connction Unsuccessful";
    die("No connection" .mysqli_connect_error());
}


?>