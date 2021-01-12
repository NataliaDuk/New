
<?php

function arrayProduct($array)
{
   $p = 1;

   foreach ($array as $value) {
      $p *= $value;
   }
   return $p;
}
$array1 = [1, 2, 3, 4];
echo arrayProduct($array1);
?>