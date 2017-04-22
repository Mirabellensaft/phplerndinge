<?php
date_default_timezone_set('Europe/Berlin');
$title = "Das Datum";
$content = date('Y-m-d H:i:s');

$template = file_get_contents('templates/index.html');

$html = str_replace("{{title}}", $title, $template);
$html = str_replace("{{content}}", $content, $html);

echo $html;
