<?php
function smail ($text) {
    return  preg_replace( [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
    [
        '😍',
        "😞",
        "😛",
        "😬"
    ],$text);
}
function months ($time) {
    date("d.m.Y");
    $months = [".01." => "января", ".02." => "февраля", 
    ".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня", 
    ".07." => "июля", ".08." => "августа", ".09." => "сентября",
    ".10." => "октября", ".11." => "ноября", ".12." => "декабря"];
    $m = date(".m."); //для замены
    $time=str_replace($m, " ".$months[$m]." ", $time);
}

// function moderator ($text) {
// return if(preg_match('/.* дурак|мудак|пидарас|шлюха.*/iu', $text)) ;
// }
// ?>