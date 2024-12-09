<?php
ini_set('display_errors', 1); // включает ошибки
ini_set('display_startup_errors', 1); //
error_reporting(E_ALL); // вывод всех ошибок

# include - тип подключения когда фала если нет, код дальше выполняет работу (Warning)
# include_once - не подключает файл больше одного раза

# require - тип подключение файла без которого дальше код не выполняется (Fatal error)
# require_once

# __DIR__ . '/path'; - правильное прописывание абсолютного пути к папке относительно проекта

if (isset($_POST['register'])) {
    echo '<pre>';
    var_dump($_POST);
    die();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
          crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12  d-flex align-center justify-content-center">
            <div class="card w-70 mt-5">
                <div class="card-body">

                    <form action="/" method="post">
                        <label for="#name">Name</label>
                        <input class="form-control" type="text" name="name" id="#name" placeholder="Enter your name">

                        <label for="#last_name">Last name</label>
                        <input class="form-control" type="text" name="last_name" id="#last_name" placeholder="Surname">

                        <label for="#birthdate">Birthdate</label>
                        <input class="form-control" type="date" name="birthdate" id="#birthdate">

                        <label for="#email">Email</label>
                        <input class="form-control" type="email" name="email" id="#email">

                        <label for="#password">Password</label>
                        <input class="form-control" type="password" name="password" id="#password">

                        <br>
                        <input class="btn btn-info" type="submit" name="register" value="Register">
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
</script>
</html>

