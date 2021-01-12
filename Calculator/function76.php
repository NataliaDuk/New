
<?php

function takes_array($input)
{
    echo "$input[0] + $input[1] =", $input[0] + $input[1];
}
$input = [1, 3];
takes_array($input);

?>