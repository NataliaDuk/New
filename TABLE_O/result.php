<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <h2>Общая стоимость</h2>
            <?php
            include_once "Table.php";

            include_once "Decimetre.php";

            include_once "Meter.php";

            include_once "Inch.php";


            $priceOne = new Table($_POST['square'], $_POST['cylinder']);

            if ($_POST['magnitude'] == "priceCm") {

                echo "<b>{$priceOne->{$_POST['magnitude']}()}   USD - cm</b>";
            }
            $priceTwo = new Decimetre($_POST['square'], $_POST['cylinder']);
            if ($_POST['magnitude'] == "priceDm") {
                echo "<b>{$priceTwo->{$_POST['magnitude']}()}   USD - dez</b>";
            }

            $priceTree = new Meter($_POST['square'], $_POST['cylinder']);
            if ($_POST['magnitude'] == "priceM") {
                echo "<b>{$priceTree->{$_POST['magnitude']}()}   USD - metre</b>";
            }

            $priceFour = new Inch($_POST['square'], $_POST['cylinder']);
            if ($_POST['magnitude'] == "priceInch") {
                echo "<b> {$priceFour->{$_POST['magnitude']}()}  USD - inch</b>";
            }

            ?>
            <a class="btn btn-success" href="Table.html">Вернуться на главную</a>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>
