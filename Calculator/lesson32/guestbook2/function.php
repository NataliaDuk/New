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
function months ($text) {
    $months = [1=>" января ", " февраля ", 
    " марта ", " апреля ", " мая ", " июня ", 
    " июля ", " августа ", " сентября ",
    " октября ", " ноября ", " декабря "];
$week=[1=>"понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
$time=date("d". $months[date('n')]. "Y(".$week[date('w')].")");}

function moderator ($text) {
return (preg_match('/.* дурак|мудак|пидарас|шлюха.*/iu', $text)) ;
}
 ?>