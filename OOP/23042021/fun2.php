<?php
function my_fun(callable $name):void
{
    $name();
}

my_fun(function():void {
    echo "Hello";
});

