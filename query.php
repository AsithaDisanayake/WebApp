<?php
include('database.php');


$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$address = $_POST['address'];
$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$language = $_POST['lang'];
$about = $_POST['about'];

//sql query to insert data into the database
$sql = "INSERT INTO user (username, password, name, address, country, zipcode, email, sex, language, about)
VALUES ('$username','$password','$name','$address','$country','$zipcode','$email','$sex','$language','$about')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>