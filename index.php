<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$lat = isset($_GET['lat']) ? $_GET['lat'] : null;
$lon = isset($_GET['lon']) ? $_GET['lon'] : null;

if ($lat && $lon) {
    $data = date('Y-m-d H:i:s') . " | Lat: $lat | Lon: $lon" . PHP_EOL;
    file_put_contents('gps_log.txt', $data, FILE_APPEND);
    echo "OK";
} else {
    echo "Missing parameters";
}
?>

