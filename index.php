<?php

require_once(__DIR__ . '/builder.php');

$item = require_once(__DIR__ . '/data.php');
foreach ($item as $data) {
    $header = buildHeader($data['title']);
    $content = buildContent($data['data']);

    $$data['destination'] = "{$header}{$content}";
}

require_once(__DIR__ . '/template.php');
