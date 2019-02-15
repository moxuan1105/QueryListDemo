<?php
require 'phpQuery.php';
require 'QueryList.php';

use QL\QueryList;

$hj = QueryList::Query('http://localhost/bloghtml',
    array(
        "url" => array('a', 'text', ''),
        "content" => array('li', 'text'),
    ));

$data = $hj->getData(function ($x) {
    return $x;
});
$html = $hj->getHtml(false);
echo $html;
echo "<pre>";
print_r($data);
