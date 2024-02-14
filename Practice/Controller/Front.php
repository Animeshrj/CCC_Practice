<?php
class Controller_Front
{
    public function init()
    {
        $object = new Model_Request();
        $url = $object->getRequestURI();
        $classname = "View_" . ucwords(str_replace("/", "_", $url), '_');
        $layout = new $classname();
        return $layout->tohtml();

    }
}