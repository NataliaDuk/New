
<?php

function plus(&$string)
{
    $string .='+Петя';
    
}
$str ='Ира';
plus($str);
echo $str;
?>