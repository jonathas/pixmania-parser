<?php

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

function formatParsedText($text)
{
    return trim(strip_tags(str_replace("&pound;&nbsp;","",$text)));
}

function isInStock($text)
{
    if(strpos(formatParsedText($text),"In stock") === false)
    {
        return "No";
    }

    return "Yes";
}