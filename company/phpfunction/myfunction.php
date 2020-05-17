<?php

$conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');
session_start();
if(isset($_POST['add_applicant'])){
	$fullname = $_POST['fullname'];
	$company_name = $_POST['company_name'];
	$myref = $_POST['myref'];
	$gender = $_POST['gender'];
	$department = $_POST['department'];
	$dob = $_POST['dob'];
	$age = $_POST['age'];
	$position = $_POST['position'];
	$date_added = date('Y/m/d');
	$status =  "active";

	$insertt = "INSERT INTO applicant(fullname, company_name, myref, gender, department, dob, age, position, date_added, status) VALUES ('$fullname', '$company_name', '$myref', '$gender', '$department', '$dob', '$age', '$position', '$date_added', '$status')";


	$result = $conn->query($insertt);

	header("Location: ../add_applicant.php?success=inserted");



	// $selects = "SELECT srn FROM user WHERE srn = '$srn'";
	// $resf = $conn->query($selects);

	

	// if(mysqli_num_rows($resf) > 0){
	// 	header("Location: ../send_trainee.php?error=srntaken");

	// }
	// else{
	// 	$inser = "INSERT INTO user (fullname, email, mobile_number, course, srn, user_type, date_created, oww, status, comp_name) VALUES ('$fullname', '$email', '$mobile_number', '$course', '$srn', '$user_type', '$date_created', '$comp', '$status', '$ff')";
	// $result = $conn->query($inser);

	// header("Location: ../send_trainee.php?insert=succes");
	// }

	

	
}

if(isset($_POST['fired_applicant'])){

	$id = $_POST['id'];
	// $subject_id = $_POST['subject_id'];
	$status = 'fired';
	// $date_submitted = date('Y/m/d');
	// $disable = "true";
	$ressss = "UPDATE applicant SET status = '$status' WHERE id = '$id'";
	$sult = $conn->query($ressss);

}
