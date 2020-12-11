<?php

$conn = mysqli_connect("localhost","root","","user1");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE user (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,username VARCHAR(30) NOT NULL,password VARCHAR(30))";

if ($conn->query($sql) === TRUE) {
  echo "user table created successfully";
} else {
  echo "Error while creating table user: ". $conn->error;
}

$sql1="CREATE TABLE Address (AddrID int UNSIGNED AUTO_INCREMENT,street VARCHAR(20),pincode int,country VARCHAR(20),state VARCHAR(20),phoneno int,id INT(6) UNSIGNED,PRIMARY KEY (AddrID),foreign key(id) references user(id))";

if ($conn->query($sql1) === TRUE) {
  echo "Address table created successfully";
} else {
  echo "Error while creating table Address: ". $conn->error;
}


$conn->close();
?>