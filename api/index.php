<?php

// Get the requested path from the URL
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

// Define the path to your project files (one level up from the 'api' folder)
$project_root = __DIR__ . '/../';

// Simple routing logic
switch ($request_uri) {
    case '/':
    case '/login.html':
        require $project_root . 'login.html';
        break;
        
    case '/register.html':
        require $project_root . 'register.html';
        break;
        
    case '/homepage.php':
        require $project_root . 'homepage.php';
        break;

    case '/article.php':
        require $project_root . 'article.php';
        break;
        
    case '/login.php':
        require $project_root . 'login.php';
        break;

    case '/logout.php':
        require $project_root . 'logout.php';
        break;
        
    // Serve static files like CSS and images
    case '/style.css':
        header('Content-Type: text/css');
        readfile($project_root . 'style.css');
        break;
        
    case '/style2.css':
        header('Content-Type: text/css');
        readfile($project_root . 'style2.css');
        break;
        
    case '/news.jpg':
        header('Content-Type: image/jpeg');
        readfile($project_root . 'news.jpg');
        break;
        
    default:
        // Handle 404 Not Found
        http_response_code(404);
        echo '<h1>404 Not Found</h1>';
        echo 'The page you requested could not be found.';
        break;
}
