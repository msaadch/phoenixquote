<?php
$username = "root";
$password = "";
$server = 'localhost';
$db = 'medicare';

$con = mysqli_connect($server,$username,$password,$db);


if (isset($_POST['fname'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dateofbirth'];
	$phone = $_POST['phone'];
  $address = $_POST['address'];
  $zip = $_POST['zip'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $income = $_POST['income'];
  $insured = $_POST['insured'];
  $gender = $_POST['gender'];
  $smoke = $_POST['smoke'];
  $coverage = $_POST['coverage'];
  $hospital = $_POST['hospital'];
  $expect = $_POST['expect'];

	$insertquery = "INSERT INTO table_med (Fname, Lname, Email, DOB, Phone, Addr, Zip, Hght, Wght, Income, Insurd, Gender, Smoke, Cvrg, Hsptl, Expect) VALUES ('$fname', '$lname', '$email', '$dob', '$phone', '$address', '$zip', '$height', '$weight', '$income', '$insured', '$gender' , '$smoke', '$coverage', '$hospital', '$expect')";
	if (mysqli_query($con, $insertquery)) {
	  echo "New record created successfully";
	} else {
		  echo "Error: " . $insertquery . "<br>" . mysqli_error($con);
		}
}
header('Refresh: 3; url=index.php');
?>