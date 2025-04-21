<?php
/** 
 * Check PHP version.
 */
if (version_compare(PHP_VERSION, '7.4', '<')) {
    throw new Exception('PHP version >= 7.4 required');
}

// Check PHP Curl & json decode capabilities.
if (!function_exists('curl_init') || !function_exists('curl_exec')) {
    throw new Exception('Ipaymax needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
    throw new Exception('Ipaymax needs the JSON PHP extension.');
}

require_once 'Ipaymax/Config.php';
require_once 'Ipaymax/ApiRequestor.php';
require_once 'Ipaymax/CoreApi.php';
require_once 'Ipaymax/Sanitizer.php';
