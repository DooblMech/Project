<?php


function buildHeader($data) : string
{
    $d = colorizeWeb(strtoupper($data), 'blue');

  return $d;



};

function buildContent($data)
{

$d='';
    foreach ($data as $line) {


                $label = isset($line['label']) ? $line['label'] : '';
                switch ($line['type']) {
                    case 'item':
                        $d .= '<b>'.colorizeWeb($label, 'red').'</b>'. ': '. implode(', ', $line['data']). "</br>";
                        break;
                    case 'list':
                        unset($line['type']);

                        foreach ($line as $key => $value) {
                            $list = is_array($value) ? implode(', ', $value) : $value;
                            $d .= $key .': '. $list . "</br>";
                        }
                        break;
                    default:
                         if ($label == '') {
                        $d .= '<b>'.colorizeWeb($label, 'green').'</b>'.  $line['data']. "</br>";
                         }
                    else  { $d .= '<b>'.colorizeWeb($label, 'green').'</b>'.': '. $line['data']. "</br>"; }

                }

            }

    return $d;
    };

function colorizeWeb(string $text, string $color): string {

    return '<span style="color:' . $color .'">' . $text . '</span>';
}

function colorize(string $text, string $color): string {
    switch($color) {
        case 'green':
            $out = "[42m"; //Green background
            break;
        case 'red':
            $out = "[41m"; //Red background
            break;
        case 'yellow':
            $out = "[43m"; //Yellow background
            break;
        case 'blue':
            $out = "[44m"; //Blue background
            break;
        default:
            return $text;
    }
    return chr(27) . "$out" . "$text" . chr(27) ;
};
