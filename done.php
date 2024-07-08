<?php require_once("vendor/connect.php");?>
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
            <a href="/" class="text-success fs-5">Все</a>
            <a href="done.php" class="text-success fs-5 mx-5">Выполненные</a>
            <a href="notdone.php" class="text-success fs-5">Невыполненные</a>
        </div>
        <!-- Таблица -->
        <table class="table table-dark table-striped my-3">
            <tr>
                <th>№</th>
                <th>Задача</th>
                <th>Действия</th>
            </tr>

            <!-- Шаблон для записи -->
             <?php
             $tasks = mysqli_query($connect, "SELECT * FROM `tasks` WHERE `tasks`.`status` = 'done'");
             $tasks = mysqli_fetch_all($tasks);
             foreach($tasks as $task){?>
             <tr>
                <td><?=$task[0]?></td>
                <td><?=$task[1]?></td>
                <td><a href="alert.php?taskid=<?=$task[0]?>" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                    <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                  </svg></a>
                <a href="vendor/delete.php?taskid=<?=$task[0]?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                  </svg></a>
                </td>
             </tr>
             <?};
             ?>
             
        </table>
        <!-- Форма добавления задачи -->
        <div class="container fixed-bottom mb-3">
            <form action="vendor/create.php" method="post">
                <div class="input-group">
                    <input type="text" name="tasktitle" id="tasktitle" class="form-control">
                    <input type="submit" value="+" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>