<?php
// Read user data from CSV file
$users = array();
if (($handle = fopen("users.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        array_push($users, $data);
    }
    fclose($handle);
}
?>


<?php
$title = 'Users Profile';
include_once("header.php");

?>
<h2 class="pln">Users</h2>
<table>
    <thead>
    <tr>
        <th class="pln">Name</th>
        <th class="pln">Email</th>
        <th class="pln">Profile Picture</th>
    </tr>
    </thead>
    <?php if (!empty($users)) { ?>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user[0]; ?></td>
                <td><?php echo $user[1]; ?></td>
                <td><img class="user-img" src="uploads/<?php echo $user[2]; ?>"></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    <?php }; ?>
</table>
</body>
</html>

