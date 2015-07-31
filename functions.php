<?php
include_once 'simple_html_dom.php';
if (isset($_GET['putDate'])) {
    $index = $_GET['putDate'];
    getCurl($index);
}
function getCurl($index)
{
    $data = file_get_html("http://bash.im/index/" . $index . "");
    $arr = array();
    $i = 0;
    foreach ($data->find('.quote') as $j) {
        foreach ($data->find('.text,.id') as $element) {
            $arr[] = "$element";
        }
    }

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}
