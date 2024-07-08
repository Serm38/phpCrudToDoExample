<?php require_once("vendor/connect.php");
$taskid = $_GET["taskid"];?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD | ToDo list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <!-- Фильтры -->
        <div id="filters" class="text-center my-3">
            <a href="#" class="text-success fs-5">Все</a>
            <a href="#" class="text-success fs-5 mx-5">Выполненные</a>
            <a href="#" class="text-success fs-5">Невыполненные</a>
        </div>
    </div>
    <main class="my-3 d-flex flex-column justify-content-center vh-100">
        <div class="container d-flex justify-content-center">
            <form action="vendor/update.php" method="post" class="text-center">
                <legend class="text-light">Вы уверены?</legend>
                <input type="hidden" name="taskid" value="<?=$taskid;?>">
                <input type="submit" value="Да" class="btn btn-success">
                <a href="/" class="btn btn-danger">Нет</a>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>