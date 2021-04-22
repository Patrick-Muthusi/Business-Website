<?php
$firstname = $_POST['firstname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$textcodent = $_POST['textcodent'];



//Database connection
$conn =new mysqli('localhost','root','','Contact_Patrick');

if ($conn->connect_error) {
	die('Connection Failed :'.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into Client_Details(firstname, phonenumber, email, textcodent)values=(?,?,?,?)");
	$stmt->bind_param("siss" ,$firstname, $phonenumber, $email, $textcodent);
	$stmt->execute();
	echo "The Management will coduct you soon";
	$stmt->close();
	$conn->close();
}


?>