<?php


function buildHeader($data) : string
{
   $data = strtoupper($data);

  return printf("<span style='color: red'>$data</span>");



};

function buildContent($data) : string
{
$d = ' ';

    foreach ($data as $line) {
        $label = isset($line['label']) ? printf("<span style='color: green'>$data</span>") : '';
        switch ($line['type']) {
            case 'skill':
                $d .= $label . implode(', ', $line['data']) . PHP_EOL;
                break;
            case 'list':
                unset($line['type']);
                foreach ($line as $key => $value) {
                    $list = is_array($value) ? implode(', ', $value) : $value;
                    $d .=  printf("<span style='color: green'> $key </span>") . $list . PHP_EOL;
                }
                $d .= PHP_EOL;
                break;
            default:
                $d .= $label . $line['data'] . PHP_EOL;
        }
    }
    return $d;
};
