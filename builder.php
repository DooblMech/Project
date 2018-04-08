<?php

function buildHeader($data) : string
{
   $data = strtoupper($data);

   $out =  printf("<span style='color: red'>$data</span>");  ;

   return $out;
   
}

function buildContent($data) : string
{
$d = ' ';
    foreach ($data as $line) {
        $label = isset($line['label']) ? buildLabel($line['label']) : '';
        switch ($line['type']) {
            case 'skill':
                $d .= $label . implode(', ', $line['data']) . PHP_EOL;
                break;
            case 'list':
                unset($line['type']);
                foreach ($line as $key => $value) {
                    $list = is_array($value) ? implode(', ', $value) : $value;
                    $d .= buildLabel(ucfirst($key)) . $list . PHP_EOL;
                }
                $d .= PHP_EOL;
                break;
            default:
                $d .= $label . $line['data'] . PHP_EOL;
        }
    }
    return $d;
};
function buildLabel($data) : string
{

    $data =  printf("<span style='color: green'>$data</span>");  ;

    return $data;
}