
<?php
$arr1 = ["Иванов", "Петров", "Сидоров"];

function arrayName($arr)
{
  $html="<ul>\n";
  foreach ($arr as $value) {
      $html .= "\t<li>$value</li>\n";
   }
   $html.="<ul>\n";
   return $html;
}

echo arrayName($arr1);

?>