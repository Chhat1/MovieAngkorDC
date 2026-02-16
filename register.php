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
            echo "<script>alert('Register successfully!'); window.location.href='login.php';</script>";
            exit();
        } else {
            echo "There is a technical problem: " . $conn->error;
        }
    }
}
?>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="container my-5 d-flex justify-content-center">
    <form method="POST" class="shadow-lg rounded-3 p-4 w-100"
          style="max-width: 400px;">
        <h2 class="text-center mb-4">Register</h2>
        
        <input class="form-control mb-3 shadow-none" type="text" name="username" placeholder="Username" required>
        <input class="form-control mb-3 shadow-none" type="email" name="email" placeholder="Email" required>
        <input class="form-control mb-3 shadow-none" type="password" name="password" placeholder="Password" required>
        
        <button class="btn btn-primary w-100 mb-3" type="submit" name="register">Register</button>
        <div class="text-center">
            <a href="login.php">Login account?</a>
        </div>
    </form>
</main> -->





<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css" rel="stylesheet">

<main class="container my-5 d-flex justify-content-center">
    <form method="POST" class="shadow-lg rounded-4 p-5 w-100"
          style="max-width: 420px; background-color:#1c1c1c; color:white;">
        <h2 class="text-center mb-4" style="color:#FFD700;">Register</h2>
        
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control shadow-none bg-dark text-white border-secondary" type="text" name="username" id="username" placeholder="Enter username" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control shadow-none bg-dark text-white border-secondary" type="email" name="email" id="email" placeholder="Enter email" required>
        </div>

        <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control shadow-none bg-dark text-white border-secondary" type="password" name="password" id="password" placeholder="Enter password" required>
        </div>
        
        <button class="btn w-100 mb-3" type="submit" name="register" style="background-color:#FFD700; color:#1c1c1c; font-weight:700;">Register</button>

        <div class="text-center">
            <span>Already have an account? </span>
            <a href="login.php" style="color:#FFD700; text-decoration:underline;">Login</a>
        </div>
    </form>
</main>

