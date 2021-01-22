<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // print_r($_POST);
    include "config.php";
$data=file("golos.txt");
if (isset($POST['answer'])) {
    $currentAnswer=$_POST['answer']??NULL;
    $buff=explode(".", $data[$currentAnswer+1]);
    $buff[1]+=1;
    $buff[1] .= "\n";
    implode("-", $buff);
    file_put_contents("golos.txt", implode("", $data));
}
$question=$data[0];
unset($data[0]);


$answers=[];
foreach ($data as $value) {
    $answers[]=explode("-", $value);

}
// print_r($answers);
    ?>
<form action="?" metod="POST"></form>
<?=$question?>
<?php
foreach ($answers as $key => $value) {
    $count=$value[1]*1;
    echo "<input type='radio' value='$key' name='answer'> $value[0]($count) <br>";

}
?>
<input type="submit" valur="ok">
</body>
</html>