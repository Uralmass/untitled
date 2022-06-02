<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Форма обратной связи </title>
</head>
<body>
<div class="container col-sm-4">
    <h1>Обратная связь</h1>
    <form action="" method="post">
        <input type="text" class="form-control" name="text" id="text" placeholder="Тема сообщения"><br>
        <textarea name="Описание" cols="50" rows=""> Текст проблемы</textarea><br>
        <input name="contact" type="radio" value="help"> Помочь удалённо<br>
        <input name="contact" type="radio" value="sos"> Отправить мастера<br>
        <p>Код красный? <input type="checkbox" name="remember"/></p><br>
        День устранения: <select name="heading">
            <option value="">-- Выберите из списка --</option>
            <option value="Сегодня">Сегодня</option>
            <option value="Завтра">Завтра</option>
            <option value="Послезавтра">Послезавтра</option>
            <option value="Само наладится">Само наладится</option>
        </select><br><br>
        <button class="btn btn-primary" type="submit">Отправить данные</button>
        <button class="btn btn-secondary" type="submit">Сбросить данные</button>
    </form>
</div>

</body>
</html>