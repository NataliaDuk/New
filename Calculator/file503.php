<?php
$html = <<<'TEXT'
<p><b>Это жирный текст</b></p>
<p><strong>Это strong-текст</strong></p>
<p><big>Это большой текст</big></p>
<p><em>Это акцентированный текст</em></p>
<p><i>Это курсив</i></p>
<p><small>Это маленький текст</small></p>
<p>Это<sub> подстрочный</sub> и <sup>надстрочный</sup>текст</p>
TEXT;
// echo $html;
echo strip_tags($html);
