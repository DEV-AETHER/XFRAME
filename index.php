<?php

/** 
 * FILENAME: portal.php
 * DESCRIPTION: routes user to public index page
 * AUTHORS: XENONMC XFRAME
*/

/** 
 * framework class
 * 
 * @param bool, use testing class or main class. true = testing, false = main
 * 
*/

namespace xframe\framework;

class xframe {

    function __construct($use_testing = false) {

        $root = str_replace('\\', '/', __DIR__);

        // require utils
        require_once $root . '/src/utils.php';

        // require composer
        require_once $root . '/vendor/autoload.php';

        // start framework classes
        if($use_testing == true) {
            $this->testing();
            return 0;
        }
        
        $this->main();
        return 0;

    }

    /** 
     * main class
     * 
    */

    function main() {

        // setup router
        $router = new \xframe\Router\App();

        dumpf($router->get_url());

        echo $router->get_request_app();

        echo $router->get_request_action();

        dumpf($router->get_app_config('About'));

        $router->get_all_apps();
        
    }

    /** 
     * testing class
     * 
    */

    function testing() {

    }

}

/** 
 * execute framework
 * 
*/

$xframe = new xframe(false);