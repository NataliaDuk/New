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
    header('Location: ?');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $question = $data[0];
    unset($data[0]);
    $answers = [];

    foreach ($data as $value) {
        $answers[] = explode($separate, $value);
    }
    ?>
    <form action="?" method="POST">
        <div class=meny>
            <h1> <?= $question ?></h1>
            <?php
            $percent = 0;
            foreach ($answers as $value) {
                $percent += $value[1];
            }
            $percent1 = $percent / 100;
            foreach ($answers as $key => $value) {
                $count = $value[1];
                $width = round(($count / $percent1), 1);
                echo "<h2>";
                echo "<div class='form'><input type='checkbox' value='$key' name='answer'> $value[0] $count($width%) </div><div class ='graph' style='width: {$width}%;'></div><br>";
                echo "</h2>";
            }
            ?>
            <input type="submit" class="button" value="ГОЛОСОВАТЬ">
        </div>
    </form>
</body>

</html>