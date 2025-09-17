<?php
// Get the requested path from the URL
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

// Simple routing logic from the project root
switch ($request_uri) {
    case '/':
    case '/login.html':
        require 'login.html';
        break;

    case '/register.html':
        require 'register.html';
        break;

    case '/homepage.php':
        require 'homepage.php';
        break;

    case '/article.php':
        require 'article.php';
        break;

    case '/login.php':
        require 'login.php';
        break;

    case '/logout.php':
        require 'logout.php';
        break;

    // Serve static files like CSS and images
    case '/style.css':
        header('Content-Type: text/css');
        readfile('style.css');
        break;

    case '/style2.css':
        header('Content-Type: text/css');
        readfile('style2.css');
        break;

    case '/news.jpg':
        header('Content-Type: image/jpeg');
        readfile('news.jpg');
        break;

    default:
        // Handle 404 Not Found
        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
        echo 'The page you requested could not be found.';
        break;
}
