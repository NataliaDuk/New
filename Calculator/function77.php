
<?php

function arraySumma($array)
{
   $s=0;

    foreach ($array as $value) {
$s += $value; 
   }
   return $s;
}
$array1=[1, 2, 3, 4];
echo arraySumma($array1);
?>