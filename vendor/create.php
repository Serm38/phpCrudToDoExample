<?php 
require_once("connect.php");
$tasktitle = $_POST["tasktitle"];  // получение нужных данных
mysqli_query($connect, "INSERT INTO `tasks` (`id`, `title`, `status`) VALUES (NULL, '$tasktitle', 'process')"); // отправка на сервер
header("Location: /"); //переадресация