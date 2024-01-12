<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Validate and process the file upload
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['profile_picture']['name']);

    if (move_uploaded_file($_FILES['profile_picture']['tmp_name'], $uploadFile)) {
        // File upload successful, continue with user registration
        // Perform database insertion or other necessary operations here

        echo "User registered successfully!";
    } else {
        echo "Error uploading file!";
    }
}
?>
