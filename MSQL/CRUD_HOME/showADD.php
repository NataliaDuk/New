<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="main">

<div class="row align-items-center">
    <div class="col">

    </div>
    <div class="col">
        <h1>Заполните анкету:</h1><br>
        <form action="add1.php" method="post">
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg">Из какого Вы города?</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg" name="city">
            </div>
            <br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg">Введите Ваш E-mail</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg" name="mail">
            </div>
            <br>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="gender"
                    id="">
                <option selected>Выберите пол</option>
                <option value="м">Мужской</option>
                <option value="ж">Женский</option>
            </select><br>
            <div class="input-group input-group-lg">
                <span class="input-group-text" id="inputGroup-sizing-lg">Введите Ваш возраст</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                       aria-describedby="inputGroup-sizing-lg" name="age">
            </div>
            <br>
            <input type="submit" class="btn btn-primary  btn-lg" value="Отправить">
        </form>

    </div>
    <div class="col">

    </div>
</div>

</body>
</html>
