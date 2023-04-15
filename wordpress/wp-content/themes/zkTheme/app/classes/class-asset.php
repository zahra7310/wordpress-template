<?php


class Asset{
 
    public static function __callStatic($method, $args){

        self::asset_files($method,$args[0]);

    }

    private static function asset_files($folder_name,$file_name){

        $file_url=THEME_URL.'/asset/'.$folder_name.'/'.$file_name;


        // switch ($folder_name) {
           
        //     case 'css':
        //         $file_url=THEME_URL.'/asset/css'.$file_name;
        //     break;

        //     case 'js':
        //         $file_url=THEME_URL.'/asset/js/'.$file_name;
        //     break;

        //     case 'images':
        //         $file_url=THEME_URL.'asset/images/'.$file_name;

        // }
        echo  $file_url;
        //$file_url=THEME_URL.'/asset/css/'.$file_name;
    }
   

    // public static function css($file_name){

    //     $file_url=THEME_URL.'/asset/css/'.$file_name;
    //     echo $file_url;

    // }

    // public static function js($file_name){

    // }

    // public static function image($file_name) {

    // }  
}


?>