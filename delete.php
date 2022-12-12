<?php

require_once 'server.php';

$id = $_GET['id'];

mysqli_query($connect_nik, "DELETE FROM Team WHERE `Team`.`Worker_id` = '$id'");


header('Location: admin.php');

?>