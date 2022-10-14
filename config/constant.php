<?php
use Illuminate\Support\Facades\Route;

    define('DS', DIRECTORY_SEPARATOR);

    define('WEBSITE_URL', DS); //url('/').
    
    define('PUBLIC_URL', WEBSITE_URL."public".DS);
    
    
    define('BASE_PATH', base_path());
    define('APP_PATH', app_path());


    define('CSS_URL', WEBSITE_URL.'assets'.DS.'css'.DS);
    define('JS_URL', WEBSITE_URL.'assets'.DS.'js'.DS);
    define('IMAGE_URL', WEBSITE_URL.'assets'.DS.'images'.DS);
    
    define('USER_IMAGE_ROOT_PATH', 'users'.DS.'avtar'.DS);
    





?>