<?php
function smile($text)
{
    return preg_replace([
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
        [
            "😍",
            "😞",
            "😛",
            "😬"
        ], $text);
}
/**
 * находит нецензурные слова
 * @param $text
 * @return mixed
 */
function checkCensor($text)
{
    preg_match_all("/.*?дурак|осел|идиот|мудак.*?/iu", $text, $matches);
    return $matches[0];
}
/**
 * выполняет сохранение введенного сообщения в файл json
 * @param $message
 * @param $name
 */
function saveMessage($message, $name)
{
    $data = json_decode(file_get_contents("data.json"));
    $data[] = ["msg" => $message, "name" => $name, "date_time" => time()];
    file_put_contents("data.json", json_encode($data, JSON_UNESCAPED_UNICODE));
}
function loadMessages()
{
    return json_decode(file_get_contents("data.json"), true);
}
/**
 * сохраняет нецензурные слова в файл file.txt с указанием времени и IP-адреса
 * @param $badWords
 */
function saveBadWordsToLog($badWords)
{
    foreach ($badWords as $word) {
        file_put_contents("file.txt",
            "$word  $_SERVER[REMOTE_ADDR] " . date("d F Y H:i:s\n"),
            FILE_APPEND
        );
    }
}
function dateFormat($time)
{
    $monthsList = [
        "1" => "Января",
        "2" => "Февраля",
        "3" => "Марта",
        "4" => "Апреля",
        "5" => "Майя",
        "6" => "Июня",
        "7" => "Июля",
        "8" => "Августа",
        "9" => "Сентября",
        "10" => "Октября",
        "11" => "Ноября",
        "12" => "Декабря"
    ];

    $dayList = [
        "Monday" => "Понедельник",
        "Tuesday" => "Вторник",
        "Wednesday" => "Среда",
        "Thursday" => "Четверг",
        "Friday" => "Пятница",
        "Saturday" => "Суббота",
        "Sunday" => "Воскресенье"
    ];

    $day = $dayList[date("l", $time)];
    $month = $monthsList[date("n", $time)];
    return date("d $month Y ($day) ", $time);
}