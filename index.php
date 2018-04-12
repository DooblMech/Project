<?php

require_once(__DIR__ . '/builder.php');

$item = require_once(__DIR__ . '/data.php');
foreach ($item as $data) {
    $head = buildHeader($data['title']);
    $text = buildContent($data['data']);
echo($head. ':'. "</br>". $text) ;
echo "</br>";

}


