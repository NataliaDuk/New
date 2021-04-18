<?php
include_once "Table.php";
include_once "Meter.php";
include_once "Inch.php";
include_once "Dec.php";


// $input=new TableCost ($_POST['square'], $_POST['heigt']);
// echo $cost->{$_POST["op"]}();

$costSm = new TableCost($_POST['square'], $_POST['heigt']);

            if ($_POST['op'] == "sm") {

                echo "<b>{$costSm->{$_POST['op']}()}   USD - cm</b>";
            }
            $costDm = new Cost($_POST['square'], $_POST['heigt']);
            if ($_POST['op'] == "dm") {
                echo "<b>{$costDm->{$_POST['op']}()}   USD - dm</b>";
            }

            $costM = new Meter($_POST['square'], $_POST['heigt']);
            if ($_POST['op'] == "m") {
                echo "<b>{$costM->{$_POST['op']}()}   USD - m</b>";
            }

            $costInc = new Inch($_POST['square'], $_POST['heigt']);
            if ($_POST['op'] == "inc") {
                echo "<b> {$costInc->{$_POST['op']}()}  USD - inc</b>";
            }