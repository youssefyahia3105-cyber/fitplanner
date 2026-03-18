<?php

$conn = mysqli_connect("localhost","root","","fitplanner");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    echo "Login successful";
}else{
    echo "Wrong email or password";
}

mysqli_close($conn);

?>