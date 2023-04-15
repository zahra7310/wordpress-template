<?php


class View
{

    public static function __callStatic($name, $arguments)
    {
        switch ($name) {

            case 'render':
                self::render_view($arguments[0]);
                break;

            case 'render_by_include':
                self::render_view_include($arguments[0], $arguments[1]);
                break;

        }

    }
    public static function render_view_include($view_name, $data = null)
    {
        !empty($data) ? extract($data) : null;
        $view_name = str_replace('.', '/', $view_name);
        $view_file_path = THEME_VIEW . DIRECTORY_SEPARATOR . $view_name . '.php';

        if (is_file($view_file_path) && is_readable($view_file_path)) {

            include($view_file_path);

        }

    }

    private static function render_view($view_name)
    {

        get_template_part('views/' . $view_name);

    }

}


?>