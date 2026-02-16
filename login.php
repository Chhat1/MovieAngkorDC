<?php
session_start();
include "config.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

        if(password_verify($password, $row["password"])){
            $_SESSION['users'] = $row['username'];
            header("Location: index.html");
            exit(); 
        } else {
            echo "<script>alert('Wrong Password!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('User not found!'); window.location.href='login.php';</script>";
    }
}
?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="container my-5 d-flex justify-content-center">
    <form method="POST" class="shadow-lg rounded-3 p-4 w-100"
          style="max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>

        <input class="form-control mb-3 shadow-none" type="text" name="username" placeholder="Username" required>
        <input class="form-control mb-3 shadow-none" type="password" name="password" placeholder="Password" required>

        <button class="btn btn-primary w-100 mb-3" type="submit" name="login">Login</button>
        
        <div class="text-center">
            <a href="register.php">Register account?</a>
        </div>
    </form>
</main> -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet">

<main class="container my-5 d-flex justify-content-center">
    <form method="POST" class="shadow-lg rounded-4 p-5 w-100"
          style="max-width: 420px; background-color:#1c1c1c; color:white;">
        <h2 class="text-center mb-4" style="color:#FFD700;">Login</h2>

        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control shadow-none bg-dark text-white border-secondary" type="text" name="username" id="username" placeholder="Enter username" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control shadow-none bg-dark text-white border-secondary" type="password" name="password" id="password" placeholder="Enter password" required>
        </div>

        <button class="btn w-100 mb-3" type="submit" name="login" style="background-color:#FFD700; color:#1c1c1c; font-weight:700;">Login</button>

        <div class="text-center">
            <span>Don't have an account? </span>
            <a href="register.php" style="color:#FFD700; text-decoration:underline;">Register</a>
        </div>
    </form>
</main>
