<?php

function debug($tableau) {
	echo '<pre>'.print_r($tableau, true).'</pre>';
}

function CleanString ($str, $delimiter='-') {
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace('/[^a-z0-9- ]/i', '', $clean);
    $clean = strtolower(trim($clean,''));
    $clean = preg_replace("/[\/_|+-]+/", '-');
    return $clean;
}
