<?php

//$conn = mysqli_connect('localhost', 'u695701984_shop', 'shoppaytoday', 'u695701984_shoppay');
$conn = mysqli_connect('localhost', 'root', '', 'pulilansystem');

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
// echo "Connected successfully";
mysqli_close($conn);

// if($conn->connect_error)
//   {
//     // check the connection
//     die('connection failed ' . $conn->connect_error);
//   }
