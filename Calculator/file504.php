<?php
$text = "Каждый охотник желает знать, где сидит фазан";
$newtext=wordwrap($text, 30, "<br>\n", 1);
// echo $html;
echo "$newtext\n";
