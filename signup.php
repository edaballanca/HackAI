<?php
// Database configuration
$servername = "localhost"; // Change if not using localhost
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "user_auth"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate passwords match
    if ($password != $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "Email already exists!";
        exit();
    }

    // Insert new user
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashed_password);
    $stmt->execute();


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="container">
        <div class="signup-card">
            <h1 class="title">Create an Account</h1>
            <p class="subtitle">Join us by filling out the form below</p>
            <form action="signup.php" method="POST">
                <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
                </div>
                <button type="button" class="btn" onclick="window.location.href='login.php';">Signup</button>

            </form>
            <p class="signup-text">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>

<style>
    /* General Reset */
/* General Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(90deg, #001431 66%, #f8f2e2 61%);
    color: #fff;
}

/* Container for centering the content */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

/* Signup card styling */
.signup-card {
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    padding: 30px 40px;
    text-align: center;
    max-width: 400px;
    width: 100%;
    color: #333;
}

/* Title and subtitle */
.title {
    font-size: 2rem;
    margin-bottom: 10px;
}

.subtitle {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #666;
}

/* Form styling */
form {
    display: flex;
    flex-direction: column;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
}

label {
    font-size: 0.9rem;
    color: #555;
    margin-bottom: 5px;
    display: block;
}

input {
    width: 100%;
    padding: 10px 15px;
    font-size: 1rem;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: border 0.3s ease;
}

input:focus {
    border-color: #6a11cb;
    outline: none;
}

/* Button styling */
.btn {
    background: #001431;
    color: #fff;
    font-size: 1rem;
    padding: 12px 20px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.btn:hover {
    background: linear-gradient(135deg, #001431, #6a11cb);
}

/* Signup text */
.signup-text {
    margin-top: 20px;
    font-size: 0.9rem;
    color: #666;
}

.signup-text a {
    color: #001431;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.signup-text a:hover {
    color: #001431;
}


</style>
