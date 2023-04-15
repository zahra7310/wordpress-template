<?php

class Autoloader
{
    public function __construct()
    {

        spl_autoload_register(array($this, 'autoloader'));

    }

    public function autoloader($class_name)
    {

        $file_name = $this->convert_class_to_file($class_name);

    }

    public function convert_class_to_file($name)
    {

        $file_name = 'class-' . strtolower($name) . '.php';
        $file_name = $this->include_file_name($file_name);

    }

    public function include_file_name($name)
    {

        $file_path = THEME_PATH . DIRECTORY_SEPARATOR.'app/classes' . DIRECTORY_SEPARATOR . $name;
        if (is_file($file_path)) {
            include($file_path);
        }
    }

}

new Autoloader;

?>