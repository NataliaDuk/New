<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Table</title>
</head>
<body>
<div class="container">
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center">Онлайн калькулятор расчета рассчета стоимости стола</h1><br>
        </header>
    </div>
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-12">
            <form action="rezult.php" method="post">
                <div class="mb-3">
                    <label class="form-label">Введите ширину стола</label>
                    <input type="text" class="form-control" name="width">
                    <label class="form-label">Введите длину стола</label>
                    <input type="text" class="form-control" name="length">
                    <label class="form-label">Введите высоту ножки стола</label>
                    <input type="text" class="form-control" name="height"><br>
                    <select name="unit" class="form-select">
                        <option selected>Выберите единицу измерения:</option>
                        <option value="Sm">Сантиметр</option>
                        <option value="M">Метр</option>
                        <option value="Inc">Дюйм</option>
                        <option value="Dm">Дециметр</option>
                    </select>
                    <br>
                    <input class="btn btn-success" type="submit" value="Рассчитать стоимость">
        </section>
    </div>
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-12">

        </section>
    </div>
</div>


</body>
</html>