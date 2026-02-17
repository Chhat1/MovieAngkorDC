<?php
include("config.php");

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check_user = "SELECT username FROM users WHERE username = '$username'";
    $result = $conn->query($check_user);

    if($result->num_rows > 0){
        echo "This username is already in use!";
    } else {
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        
        if($conn->query($sql)){
            echo "<script>alert('Register successfully!');</script>";
            exit();
        } else {
            echo "There is a technical problem: " . $conn->error;
        }
    }
}
?>