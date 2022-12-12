<?php
require_once 'server.php';

$name = $_POST['name'];
$mail = $_POST['mail'];
$type_of_service = $_POST['type_of_service'];

mysqli_query($connect_nik,"INSERT INTO `Clientinfo` (`Client_id`, `Client_name`, `Clienr_mail`, `type_of_service`) VALUES (NULL, '$name', '$mail', '$type_of_service')");

header('Location: zayavka.php');
?>

