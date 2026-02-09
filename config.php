<?php

// 1) SESSION START

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


// 2) ENVIRONMENT SETTINGS

define("APP_ENV", "production"); // development | production

if (APP_ENV === "development") {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}


// 3) TIMEZONE

date_default_timezone_set("Asia/Kolkata");


// 4) PROJECT PATHS

define("ROOT_PATH", __DIR__);

// Auto Detect BASE URL (Optional)
// Example result: http://localhost/websolvit
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'] ?? "localhost";
$projectFolder = ""; // Change this to your project folder name if needed

define("BASE_URL", $protocol . $host . "" . $projectFolder);

// 5) COMMON HELPERS

// Always use this for file includes (No path errors)
function include_file($path)
{
    $file = ROOT_PATH . "/" . ltrim($path, "/");
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("File not found: " . $file);
    }
}

// Assets path helper
function asset($path)
{
    return BASE_URL . "/" . ltrim($path, "/");
}

// URL helper (for links)
function url($path = "")
{
    return BASE_URL . "/" . ltrim($path, "/");
}

// Redirect helper
function redirect($path)
{
    header("Location: " . url($path));
    exit;
}

// Debug helper
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die;
}

    