<?php

// --- DEBUGGING SCRIPT ---

// Set the content type to plain text for clean output
header('Content-Type: text/plain');

echo "--- VERCEL PHP ROUTER DEBUG --- \n\n";

// This is the most important line. It shows us the path Vercel is sending.
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2)[0];
echo "Request URI Detected: " . $request_uri . "\n\n";

echo "--- Full \$_SERVER superglobal --- \n";
// This will print all available server variables for more context.
print_r($_SERVER);

?>
