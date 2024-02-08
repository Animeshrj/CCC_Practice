<?php

class Mage
{
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

    }
    public static function registry($key)
    {

    }
    public static function getBaseDir($subDir = null)
    {

    }
    public static function getModel($model_name)
    {
        $model_name = ucwords(str_replace('/', '_Model_', $model_name));
        return new $model_name;
    }
}

?>