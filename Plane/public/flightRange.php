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

    <h2>Запас топлива</h2>
    <input type="text" name="reserve">
    <h2>Расход топлива</h2>
    <input type="text" name="consumption">
    <input type="submit" value="Вычислить">
</form>
<b><?= (new \Web\Range($_POST['reserve']??0, $_POST['consumption']??0))->flightRange()?></b><br>

</body>
</html>
