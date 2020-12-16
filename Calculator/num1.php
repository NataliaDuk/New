<?php
$years = $_POST["years"];

if ($years <= 18)
    echo "Юноша";
else if ($years >= 65) {
    echo "Дедушка";
} else {
    echo "Мужчина";
}
