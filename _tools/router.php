<?php

$sPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$sPath = $sPath ?: '/';
$sFullPath = __DIR__ . '/../' . ltrim($sPath, '/');

if ($sPath !== '/' && is_file($sFullPath)) {
    return false;
}

require __DIR__ . '/../index.php';
