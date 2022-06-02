<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма авторизации</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>
<body>
<div class="container col-sm-4">
    <h1>Форма авторизации</h1>
    <form action="auth.php" method="post">
        <input type="email" class="form-control" name="email" id="email" placeholder="Введите email"><br>
        <input type="password" class="form-control" name="password" id="password" placeholder="Введите password"><br>
        <button class="btn btn-outline-primary " type="submit">Войти</button>
    </form>
</div>

</body>
</html>