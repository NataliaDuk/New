<?php
if (!headers_sent()) {
header('Location: http://www.example.com/');
exit;
}