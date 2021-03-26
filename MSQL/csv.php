<?php
header('Content-Disposition: attachment; filename="file.csv"');

$link = mysqli_connect("Localhost", "root", "root", "guestbook");
$sql="SELECT * FROM `form`";

$result = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "$row[id];$row[name];$row[meropriyatie];$row[comment];$row[phone]\n";
}