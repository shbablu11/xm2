<?php
include "../inc/env.php";

$todo=$_REQUEST['todo'];

$query= "INSERT INTO all_todo(title, status) VALUES ('$todo', '0')";
$response= mysqli_query($dbconnect, $query);

if($response){
    header("Location: ../index.php");
}











?>