<?php
namespace  Content\Core;
use Content\Core\Autoloader\Autoloader;
use Content\Core\Regions\EndpointConfig;
use Content\Core\Regions\LocationService;
define('ENABLE_HTTP_PROXY', false);
define('HTTP_PROXY_IP', '127.0.0.1');
define('HTTP_PROXY_PORT', '8888');
class Config
{
    private static $loaded = false;
    public static function load(){
        if(self::$loaded) {
            return;
        }
        Autoloader::addAutoloadPath("Api");
        EndpointConfig::load();
        self::$loaded = true;
    }
}