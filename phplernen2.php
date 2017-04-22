<?php
date_default_timezone_set('Europe/Berlin');

$today = new DateTime();
$birthday = DateTime::createFromFormat('d.m.Y H:i', '21.08.1982 19:10');

$difference = $today->getTimestamp() - ($birthday)->getTimestamp();
 //getTimestamp() von birthday und today, differenz bilden ergibt sekunden
$title = "Tanja's Alter:";
$content = $difference/3600 . " Stunden";
//difference/3600 ergibt Differenz in Stunden, " Tage" in Stunden ändern.
$template = file_get_contents('templates/index.html');

$html = str_replace("{{title}}", $title, $template);
$html = str_replace("{{content}}", $content, $html);

echo $html;
