<?php
include "../vendor/autoload.php";
use Web\Seats;
use Web\Plane;
use Web\Range;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Вычислить дальность полета</h1>

<?= (new Seats())->setSeats(20)->setPassengers(15)->availableSeats()
//include_once ("flightRange.php")?>
<?= (new Range())->setReserve(20)->setConsumption(15)->flightRange()
//include_once ("flightRange.php")?>
<!---->
<!--<h1>Вычислить количество свободных мест</h1>-->
<?php //include_once ("availableSeats.php")?>
</body>
</html>