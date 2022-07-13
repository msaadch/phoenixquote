<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'phoenix';

$con = mysqli_connect($server,$username,$password,$db);


if (isset($_POST['fname'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dateofbirth'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$zip = $_POST['zip'];
	$year = $_POST['datepicker'];
	$cmake = $_POST['cmake'];
	$model = $_POST['model'];
	$insured = $_POST['insured'];
	$dui = $_POST['dui'];
	$accident = $_POST['accident'];
	$ticket = $_POST['ticket'];
	$owner = $_POST['owner'];

	date_default_timezone_set("America/New_York");
	$date = date("Y-m-d H:i:s");

$insertquery = "INSERT INTO auto (Fname, Lname, Email, DOB, Phone, Addr, Zip, Year, CMake, Model, Insured, DUI, Accident, Ticket, Owner, Time) VALUES ('$fname', '$lname', '$email', '$dob', '$phone', '$address', '$zip', '$year', '$cmake', '$model', '$insured', '$dui', '$accident', '$ticket', '$owner', '$date')";
	if (mysqli_query($con, $insertquery)) {
	  // echo "New record created successfully";
	} else {
		  echo "Error: " . $insertquery . "<br>" . mysqli_error($con);
		}
}
header('Refresh: 0; url=thanks.html');
?>