<?php

$rootDir = "";
if (strpos($_SERVER['HTTP_HOST'], 'localhost') === FALSE) {
    //On Production
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
} else {
    //On Dev server
    $rootDir = $_SERVER['DOCUMENT_ROOT'] . '/baixadawebstudio';

    $find = 'G:/xampp/htdocs/';
    $replacement = '';
    $root = '/' . str_replace($find, $replacement, $rootDir);
}
