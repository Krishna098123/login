<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For simplicity, check if the username and password match
    $hashedPassword = password_hash('example_password', PASSWORD_BCRYPT); // Replace 'example_password' with the actual password used during registration
    
    if ($username === 'example' && password_verify($password, $hashedPassword)) {
        echo "Login successful!";
    } else {
        echo "Invalid credentials!";
    }
}
?>
