<?php
$conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');

if(isset($_POST['submit_acc'])){

	$myref = uniqid();
	$fullname = $_POST['fullname'];
	$company_name = $_POST['company_name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$mobile_number = $_POST['mobile_number'];
	// $myref = $_POST['myref'];
	$user_type = $_POST['user_type'];
	$account_type = $_POST['account_type'];
	$status = "active";
	$date_created = date('Y/m/d');
	// echo $fullname;
	// echo '<br>';
	// echo $user_type;
	// echo '<br>';
	// echo $password;
	// echo '<br>';
	// echo $address;
	// echo '<br>';
	// echo $mobile_number;
	// echo '<br>';
	// echo $myref;
	// echo '<br>';
	// echo $user_type;
	// echo '<br>';
	// echo $account_type;
	// echo '<br>';
	// echo $status;
	// echo '<br>';
	// echo $date_created;

	$select = "SELECT * FROM users WHERE username = '$username'";
	$reselect = $conn->query($select);

	if(mysqli_num_rows($reselect) > 0 ){
		header("Location: ../add_account.php?error=usertaken");

	}
	else{

	$query = "INSERT INTO users (username, password, fullname, company_name, address, mobile_number, myref,  account_type, user_type, status, date_created) VALUES ('$username', '$password', '$fullname', '$company_name', '$address', '$mobile_number', '$myref',  '$account_type', '$user_type', '$status', '$date_created')";
	$result = $conn->query($query);
	header("Location: ../add_account.php?success=inserted");
}
}



// if(isset($_POST['submit_acc'])){
// 	$conn = mysqli_connect('localhost', 'root', '', 'tonsberg');
// 	$query  = $conn->prepare("INSERT INTO user (fullname, username, password, myref, user_type, status, date_created) VALUES (?,?,?,?,?,?,?)");
// 	$fullname = $_POST['fullname'];
// 	$username = $_POST['username'];
// 	$password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);
// 	$myref = $_POST['myref'];
// 	$user_type = $_POST['user_type'];
// 	$status = "active";
// 	$date_created = date('Y/m/d');

// 	$query->bind_param('bbbbbbb', $fullname, $username, $password, $myref, $user_type, $status, $date_created);
// 	if($query->execute()){
// 		header("Location: ../register_account.php");
// 	}
// 	else{
// 		echo 'error';
// 	}

// }


