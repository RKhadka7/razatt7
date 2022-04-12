<?php
$name= $_POST['name'];
$address= $_POST['address'];

include 'connect.php';

$sql = "INSERT INTO anony (name, address) VALUES ('$name', '$address')";
$result = mysqli_query($conn,$sql);
if ($result) {
	header('location:try.php');
}
?>