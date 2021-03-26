<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row align-items-start">
        <div class="col">


<form action="add1.php" method="post">
    <label>Как Вас зовут?</label>
    <input type="text" name="name"><br>
    <label>Как Вам мероприятие?</label>
    <textarea cols="50" rows="5" name="meropriyatie"></textarea><br>
    <label>Как Вы про нас узнали?</label>
    <input type="text" name="comment"><br>
    <label>Контактный телефон</label>
    <input type="text" name="phone"><br>
    <input type="submit" value="ok">
</form>
        </div>
</body>
</html>