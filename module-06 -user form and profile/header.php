<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($title)) {
            echo $title;
        } ?></title>
    <!-- Milligram CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="form-container">
    <a class="button" href="index.php"><span class="pln">User Form</span></a>
    <a href="/users.php" class="button button-outline"><span class="pln">User Profile</span></a><span class="pln">
