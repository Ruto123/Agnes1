<?php
$Servername = "localhost";
$username = "root";
$password = "";
$dbname = "artwork";

if($_SERVER['REQUEST_METHOD']=='POST'){
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
	$password = $_POST['password'];
	$repeatPassword = $_POST['repeatPassword'];
	
	
	// Database connection
	$conn = new mysqli('localhost','root','','artwork');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into login(firstName, lastName, email, phoneNumber, password, repeatPassword) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiss", $firstName, $lastName, $email, $phoneNumber, $password, $repeatPassword);
		$execval = $stmt->execute();
		echo $execval;
		echo "You have successfully registered";
		$stmt->close();
		$conn->close();
	}
}