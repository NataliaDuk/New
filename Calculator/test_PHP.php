<?php
$N1 = $_POST["N1"];
$N2 = $_POST["N2"];
$N3 = $_POST["N3"];

if ($N1="value=0" and $N2="value=0" and $N3="value=0") {
    echo "Зачет";
} else {
    echo "Не зачет";
}
