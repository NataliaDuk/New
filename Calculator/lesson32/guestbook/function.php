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
    return    $time=date("d.m.Y");
    
}

function moderator ($text) {
return preg_match('/.* дурак|мудак|пидарас|шлюха.*/iu', $text);
}
?>