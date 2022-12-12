<?php
require_once 'server.php';

$id = $_GET['id'];
$table_name = $_GET['table_name'];
$team_upd = mysqli_query($connect_nik, ("SELECT * FROM `Team` WHERE `Worker_id` = '$id' "));
$team_upd = mysqli_fetch_assoc($team_upd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE_SURF-BD</title>
</head>
<body>
<style>
    body{font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
</style>

<h3>Update Product</h3>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $team_upd['Worker_id'] ?>">
        <p>Worker_info</p>
        <input type="text" name="Worker_info" value="<?= $team_upd['Worker_info'] ?>">
        <p>Worker_role</p>
        <input type="text" name="Worker_role" value="<?= $team_upd['Worker_role'] ?>"> 
        <button type="submit">Update</button>
    </form>

</body>
</html>