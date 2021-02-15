<?php
$url = 'https://tech.onliner.by/2021/02/15/blog-o-voennoj-istorii-belarusi';
$content = file_get_contents($url);
preg_match_all('/<div class="news-entry">(.+)?/U', $content, $match);
print_r($match[1]);
