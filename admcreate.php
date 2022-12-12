<?php
require_once 'server.php';

$Worker_role = $_POST['Worker_role'];
$Worker_info = $_POST['Worker_info'];
$table_name = $_POST['table_name'];

mysqli_query($connect_nik,"INSERT INTO `Team` (`Worker_id`, `Worker_info`, `Worker_role`) VALUES (NULL, '$Worker_info', '$Worker_role')");

header('Location: admin.php');
?>