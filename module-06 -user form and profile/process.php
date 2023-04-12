<?php
// Get form inputs
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$profile_picture = $_FILES['profile_picture'];

// Validate form inputs
if (empty($name) || empty($email) || empty($password) || empty($profile_picture)) {
    die("Error: All fields are required.");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Error: Invalid email format.");
}

// Save profile picture to the server
$uploads_dir = 'uploads/';
$unique_filename = uniqid() . '_' . $profile_picture['name'];
$destination = $uploads_dir . $unique_filename;
if (!move_uploaded_file($profile_picture['tmp_name'], $destination)) {
    die("Error: Failed to upload profile picture.");
}

// Save user data to CSV file
$user_data = array($name, $email, $unique_filename);
$fp = fopen('users.csv', 'a');
fputcsv($fp, $user_data);
fclose($fp);

// Set cookie with user's name
session_start();
setcookie('name', $name, time() + 3600); // cookie expires in 1 hour

// Redirect to success page
header('Location: success.php');
exit;
?>
