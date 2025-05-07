<?php
declare(strict_types=1);

$phpMajor = PHP_MAJOR_VERSION;
$phpMinor = PHP_MINOR_VERSION;
$phpVersion = "php{$phpMajor}{$phpMinor}";

$loaderPath = __DIR__ . "/{$phpVersion}/loader.php";

if (!file_exists($loaderPath)) {
    header("HTTP/1.1 500 Internal Server Error");
    echo "This PHP version ($phpMajor.$phpMinor) is not supported by the IonCube loader.";
    exit(1);
}

//require_once $loaderPath;