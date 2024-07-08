<?php 
require_once("connect.php");
$taskid = $_GET["taskid"];  // получение нужных данных
mysqli_query($connect, "DELETE FROM `tasks` WHERE `tasks`.`id` = $taskid"); // отправка на сервер
header("Location: /"); //переадресация