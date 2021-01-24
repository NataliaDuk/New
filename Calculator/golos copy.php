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
        <?= $question ?>
        <br>
        <?php
        foreach ($answers as $key => $value) {
            $count = $value[1] * 1;
            echo "<input type='radio' value='$key' name='answer'> $value[0] ($count) <br>\n";
        }
        ?>
        <input type="submit" value="ok">
    </form>
</body>

</html>