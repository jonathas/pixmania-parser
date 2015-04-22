<?php

require 'vendor/autoload.php';
require 'functions.php';

use Sunra\PhpSimple\HtmlDomParser;

$html = getPage("http://www.pixmania.co.uk/consumer-dslr/canon-eos-700d-body-only/21326410-a.html");
#$html = getPage("http://www.pixmania.co.uk/lens-for-canon/canon-ef-50-mm-f-1-8-ii-standard-lens/21762704-a.html");
#$html = getPage("http://www.pixmania.co.uk/cover-and-satchel/case-logic-dcb-306-bag/09957081-a.html");

$dom = HtmlDomParser::str_get_html($html);

$product = formatParsedText($dom->find("h1[class='pageTitle']")[0]);
$price = formatParsedText($dom->find("ins")[0]);
$instock = isInStock($dom->find("section[class='description'] div[class='availability']")[0]);

print "Product: " . $product . "\n";
print "Price: " . $price . "\n";
print "In stock: " . $instock . "\n";
