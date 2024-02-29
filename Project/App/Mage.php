<?php

class Mage
{
    private static $registry = [];
    private static $BaseDir = 'C:\xampp\htdocs\PhpPractice\Project';
    private static $baseUrl = "http://localhost/PhpPractice/Project";
    private static $_singleTon = null;
    public static function init()
    {

        $frontCore = new Core_Controller_Front();
        $frontCore->init();

    }
    public static function register($key, $value)
    {
        self::$registry[$key] = $value;
    }
    public static function registry($key)
    {
        return isset(self::$registry[$key]) ? self::$registry[$key] : null;
    }
    public static function getBaseDir($subDir = null)
    {
        if ($subDir) {
            return self::$BaseDir . '/' . $subDir;
        }
        return self::$BaseDir;
    }
    public static function getModel($model_name)
    {
        $model_name = str_replace('/', '_Model_', $model_name);
        $model_name = ucwords(str_replace('/', '_', $model_name), '_');
        return new $model_name;

    }
    public static function getBlock($className)
    {
        $className = str_replace("/", "_Block_", $className);
        $className = ucwords(str_replace("/", "_", $className), '_');
        return new $className();
    }
    public static function getBaseUrl($subUrl = null)
    {
        if ($subUrl) {
            return self::$baseUrl . '/' . $subUrl;
        }
        return self::$baseUrl;
    }

    
    public static function getSingleton($className)
    {

        if (isset(self::$_singleTon[$className])) {
            return self::$_singleTon[$className];

        } else {

            return self::$_singleTon[$className] = self::getModel($className);
        }
    }
}

?>