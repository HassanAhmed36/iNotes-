<?php
include 'db.php';
$title = @$_POST['title'];
$description = @$_POST['description'];
$q = "INSERT into `note` values (null, '$title', '$description')";
$res = mysqli_query($con , $q);
if ($res) {
    header('location: list.php');
 
}

?>