<?php
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseSessionStorage;

error_reporting(null);

session_start();

try {
    ParseClient::initialize('alDBkFTN5nwSF4k7urnKWdxsw3w7MXK6KYhaxUzU','eSgo28QWOOWXSpZLlGdr4AKAXWksnvvwPrN61JO8', 'VjUV6Xbj4YoemdEXT7CLLL27vvrWW02rvl7lVmIU');
    ParseClient::setServerURL('https://parseapi.back4app.com/', '/');
    ParseClient::setStorage(new ParseSessionStorage());
} catch (Exception $e) {
}

$health = ParseClient::getServerHealth();
if ($health['status'] !== 200) {
}

// Website root url
$GLOBALS['WEBSITE_PATH'] = 'http://admincp.swapto.com/';
