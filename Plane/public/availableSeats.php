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

<form action="?" method="post">
    <h1>Вычислить количество свободных мест</h1>
    <h2>Количество посадочных мест</h2>
    <input type="text" name="reserve">
    <h2>Количество пассажиров на борту</h2>
    <input type="text" name="consumption">
    <input type="submit" value="Вычислить">

</form>
<b><?= (new \Web\Seats($_POST['seats']??0, $_POST['passengers']??0))->availableSeats()?></b>
</body>
</html>