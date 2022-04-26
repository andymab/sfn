<?php

ini_set( 'error_reporting', E_ALL );
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );

require( '.env.php');

require_once('models/Autoloader.php');
Autoloader::SetDestination( 'controllers/' );
Autoloader::SetDestination( 'models/' );
spl_autoload_register( ['Autoloader', 'Autoload'] );


list( $controller_name, $method, $parameter ) = array_pad( explode( "/", $_GET['action'] ?? "index/index" ), 3, null );

if( !file_exists( rPATH . "/controllers/{$controller_name}/controller.php" ) ) {
    echo "Не найден контроллер '{$controller_name}'";
    die;
}

require_once(rPATH . "/controllers/{$controller_name}/controller.php" );

$controller = "\\{$controller_name}\\{$controller_name}";

$controller_instance = new $controller;

if( !$method ) {
    $method = 'index';
}

if( !$parameter ) {
    $parameter = null;
}

if( $controller_instance->has_method( $method )) {
    //когда обнаружен метод теперь стоит проверить
    //есть ли доступ у пользователя
    $access = true;

    if( isset( $controller_instance->access ) ) {
        $access = \Access::access( $method, $controller_instance->access,$parameter );
    }

    if( $access ) { //если есть доступ
        $controller_instance->exec( $method, $parameter );
    } else {
        //авторизация
        //echo $access.'-'.$controller_name.'/'.$method;die;
        $controller_instance->Views->render( '/landing' );
    }
} else {
    echo "В контроллере '{$controller_name}' отсутствует метод '{$method}'";
}