<?php
$id = $_GET['id'];
include 'db.php';
$q = "DELETE from `note` where `id` = '$id'";
$res = mysqli_query($con, $q);

if($res){
     echo "'$id' deleted";
    header('location: list.php');
    die;
}



?>