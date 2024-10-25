<?php
$request_uri = $_SERVER['REQUEST_URI'];
$base_path = dirname($_SERVER['PHP_SELF']);

// Remove query string se houver
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove o base path da URL se necessário
if (strpos($path, $base_path) === 0) {
    $path = substr($path, strlen($base_path));
}
$path = trim($path, '/');

// Define o content type como HTML
header('Content-Type: text/html; charset=UTF-8');

// Roteamento das páginas
switch ($path) {
    case '':
    case 'index.html':
        readfile('index.html');
        break;

    case '?exit':
        readfile('index.html?exit.html');
        break;

    case 'startpage/':
        readfile('startpage/index.html');
        break;

    case '?sign_in':
        readfile('index.html?sign_in=1.html');
        break;

    case 'privacy':
        readfile('privacy.html');
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        echo "<html><body><h1>404 - Página não encontrada</h1></body></html>";
        break;
}
