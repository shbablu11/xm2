<?php
include "../inc/env.php";
$id=$_REQUEST['id'];

$query="DELETE FROM all_todo WHERE id='$id'";

$response= mysqli_query($dbconnect, $query);

if($response){
    header("Location: ../index.php");
}




?>