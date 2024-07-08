<?php 
require_once("connect.php");
$taskid = $_POST["taskid"];  // получение нужных данных
mysqli_query($connect, "UPDATE `tasks` SET `status` = 'done' WHERE `tasks`.`id` = $taskid"); // отправка на сервер
header("Location: /"); //переадресация