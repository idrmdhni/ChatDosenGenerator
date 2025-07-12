<?php

function getEnvVar($key)
{
    $envPath = dirname(__DIR__, 2) . '/.env';
    if (!file_exists($envPath)) return null;
    $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($envKey, $envValue) = array_map('trim', explode('=', $line, 2));
        if ($envKey === $key) return $envValue;
    }
    return null;
}

?>