<?php

require_once '../server.php';

$id = $_POST['id'];
$Worker_role = $_POST['Worker_role'];
$Worker_info = $_POST['Worker_info'];

mysqli_query($connect_nik, "UPDATE `Team` SET `Worker_info` = '$Worker_info', `Worker_role` = '$Worker_role' WHERE `Team`.`Worker_id` = '$id'");

header('Location: ../admin.php');

?>