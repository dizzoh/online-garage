<?php
$connect = mysqli_connect('localhost','','client');
if(!$connect){
    die("connection failed".mysqli_connect_error());
}
?>