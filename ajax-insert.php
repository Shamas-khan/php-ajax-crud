<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$conn = mysqli_connect("localhost", "root", "", "php-ajax-crud") or die("Couldn't connect to " . mysqli_connect_error());
$sql = "INSERT iNTO students(first_name,last_name) values ('{$fname}','{$lname}')";
if (mysqli_query($conn, $sql)) {
    echo 1;
    mysqli_close($conn);
} else {
    echo 0;
}