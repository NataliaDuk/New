<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="style26.css">
</head>

<body>

<?php
include "config1.php";
$data = file($fileName);
if (isset($_POST['answer'])) {
    $currentAnswer = $_POST['answer'];
    $buff = explode($separate, $data[$currentAnswer + 1]);
    $buff[1] += 1;
    $buff[1] .= "\n";
    $data[$currentAnswer + 1] = $buff[0] . $separate . $buff[1];
    file_put_contents($fileName, implode("", $data));
}
$question = $data[0];
unset($data[0]);


$answers = [];

foreach ($data as $value) {
    $answers[] = explode($separate, $value);
}

// print_r($answers);
?>

<form action="?" method="POST">
<div class=meny>
   <h1> <?= $question ?></h1>
    <br>
 
    <?php
 
    foreach ($answers as $key => $value) {
        echo "<h2>";
        
        $count = $value[1] * 1;
        echo "<input type='radio' value='$key' name='answer'><div class='graph'> $value[0] ($count)</div><br>\n";
        echo "</h2>";
    }
    
    ?>
     <input type="submit" class="button" value="ГОЛОСОВАТЬ">
    </div>
</form>
</body>

</html>