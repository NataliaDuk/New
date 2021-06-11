<?php
include "../vendor/autoload.php";
use Web\Seats;
use Web\Plane;

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
<?= (new Plane(20, 1))->flightRange()?>

<h1>Вычислить количество свободных мест</h1>

<?= (new Seats(20, 15))->availableSeats()?>


</body>
</html>