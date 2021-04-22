<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <?php
            include_once "Input.php";
            $input = new Input();
            echo $input
                    ->setType("text")
                    ->setPlaceholder("Введите логин")
                    ->setClass("form-control")
                    ->html() . "<br><br>";
            echo $input
                    ->setType("password")
                    ->setPlaceholder("Введите пароль")
                    ->setClass("form-control")
                    ->html() . "<br><br>";
            echo $input
                ->setType("submit")
                ->setPlaceholder("Войти")
                ->setClass("btn btn-primary")
                ->html();
            ?>
        </div>
    </div>

</div>

</body>
</html>

