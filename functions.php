<?php
include_once 'simple_html_dom.php';
if (isset($_GET['putDate'])) {
    $index = $_GET['putDate'];
    getCurl($index);
}
function getCurl($index)
{
    $data = file_get_html("http://bash.im/index/" . $index . "");
    $arr1 = array();
    $arr2 = array();
    foreach ($data->find('.id') as $quoteId) {
        $arr1[] = $quoteId->plaintext;
    }
    foreach ($data->find('.text') as $quoteText) {
        $arr2[] = $quoteText->plaintext;
    }

    echo '<pre>';
    print_r($arr2);
    echo '</pre>';
}
