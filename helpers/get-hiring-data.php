<?php

function getHiringData()
{
    $uri = $_SERVER['REQUEST_URI'];
    $path = trim(parse_url($uri, PHP_URL_PATH), '/');

    $segments = explode('/', $path);

    if (count($segments) > 1) {
        $page = $segments[count($segments) - 1];
    } else {
        $page = 'index';
    }

    if ($_SERVER['HTTP_HOST'] === 'localhost') {
        $url = 'http://localhost/baixadawebstudio/services/hiring.json';
        $json = file_get_contents($url);
    } else {
        $url = 'https://baixada-web-studio.great-site.net/services/hiring.json';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $json = curl_exec($ch);
        curl_close($ch);
    }

    if ($json === false) {
        echo "Erro ao acessar o JSON: $url";
        return null;
    } else {
        $data = json_decode($json, true);

        if (isset($data[$path])) {
            return $data[$path];
        }

        if (isset($data[$page])) {
            return $data[$page];
        } else {
            return null;
        }
    }
}
