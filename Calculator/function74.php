
<?php

function Test()
{
    static $a=0;
    echo $a;
    $a++;
}
echo Test();
echo Test();
echo Test();
?>