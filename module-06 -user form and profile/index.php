<?php
$title = 'Form Page';
include_once("header.php");

?>
    <form class="form-class" method="POST" action="process.php" enctype="multipart/form-data">
        <span class="pln">
        </span><fieldset><span class="pln">
        <div class="pln">
            <label for="name">Name:</label>
            <input type="text" class="pln" id="name" name="name" required>
        </div>
        <div class="pln">
            <label for="email">Email:</label>
            <input type="email" class="pln" id="email" name="email" required>
        </div>
        <div class="pln">   
            <label for="password">Password:</label>
            <input type="password" class="pln" id="password" name="password" required>
        </div>
        <div class="pln">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" class="pln" id="profile_picture" name="profile_picture" required>
        </div>
        <input type="submit" class="btn btn-primary mt-3" value="Submit">
    </form>
</div>

<?php
include_once("header.php");