<?php

if ($_SERVER['REQUEST_URI'] === '/debug') {
    header('Content-Type: application/json');
    echo json_encode([
        'uri' => $_SERVER['REQUEST_URI'],
        'script_name' => $_SERVER['SCRIPT_NAME'],
        'php_self' => $_SERVER['PHP_SELF'],
    ]);
    exit;
}

if ($_SERVER['REQUEST_URI'] === '/favicon.ico') {
    http_response_code(204);
    exit;
}

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: application/json');
    echo json_encode([
        'error' => $e->getMessage(),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
    ]);
}
