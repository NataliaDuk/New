<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook_bd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row align-items-start">
        <div class="col-7">
            <h1>Заполните форму регистрации:</h1>
            <form action="add.php" method="post">
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Из какого Вы города?</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-lg" name="City">
                </div><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Введите Ваш E-mail</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-lg" name="mail">
                </div><br>
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="Gender" id="">
                    <option selected>Выберите пол</option>
                    <option value="1">Мужской</option>
                    <option value="2">Женский</option>
                </select><br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Введите Ваш возраст</span>
                    <input type="text" class="form-control" aria-label="Sizing example input"
                           aria-describedby="inputGroup-sizing-lg" name="Age">
                </div><br>
                <input type="submit" class="btn btn-primary  btn-lg" value="Отправить">
            </form>

        </div>
</body>
</html>