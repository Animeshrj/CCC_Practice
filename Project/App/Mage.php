<?php

class Mage
{
    private static $registry = [] ;
    private static $BaseDir = 'C:\xampp\htdocs\PhpPractice\Project';
    public static function init()
    {
        // $request_model = new App_Code_Local_Core_Controller_Model_Request();

        // $request_model = Mage::getModel('core/request');
        $frontCore = new Core_Controller_Front();
        $frontCore->init();
        // echo $request_uri = $request_model->getRequestURI();
    }
    public static function register($key, $value)
    {
        self::$registry[$key]= $value;
    }
    public static function registry($key)
    {
        return isset(self::$registry[$key]) ? self::$registry[$key] : null;
    }
    public static function getBaseDir($subDir = null)
    {
        if($subDir)
        {
            return self::$BaseDir.'/'.$subDir;
        }
        return self::$BaseDir;
    
    }
    public static function getModel($model_name)
    {
        $model_name = ucwords(str_replace('/', '_Model_', $model_name));
        return new $model_name;
    }
    public static function getBlock($className)
    {
        $className = str_replace("/", "_Block_", $className);
        $className = ucwords(str_replace("/", "_", $className), '_');
        return new $className();
    }
}

?>