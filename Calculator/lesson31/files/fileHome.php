
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
Загрузить файлы:<br>
    <input name="userfile[]" type="file"><br>
    <input name="userfile[]" type="file"><br>
    <input name="userfile[]" type="file"><br>
	<input type="submit" value="Отправить">
</form>
<?php
print_r($_FILES);
$file="upload/".$_FILES['userfile']['name'];
move_uploaded_file($_FILES['userfile']['tmp_name'], $file);
if (isset($_FILES['userfile']['name'])) { $p='/\.jpg|\.doc|/.xls|/.pdf|/.(a-z)/'u;
    $type=preg_match($p, $_FILES['userfile']['name'], $matches); 
$imagefile=[
    
]
}

    // foreach ($_FILES['userfile[]']['name'] as $key => $value) {
    // }


?>
</body>
</html>
