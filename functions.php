<?php

/**
 * Returns the html fetched by curl
 * @param $url
 * @return mixed
 */
function getPage($url)
{
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
}

/**
 * Returns the parsed text, without the html tags and trimmed
 * @param $text
 * @return string
 */
function formatParsedText($text)
{
    return trim(strip_tags(str_replace("&pound;&nbsp;","",$text)));
}

/**
 * Returns if the item is in stock
 * @param $text
 * @return string
 */
function isInStock($text)
{
    if(strpos(formatParsedText($text),"In stock") === false)
    {
        return "No";
    }

    return "Yes";
}