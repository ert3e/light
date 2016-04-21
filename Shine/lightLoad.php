<?php

namespace Light\Load;
/**
 * Class lightLoad
 * @package Light\lightLoad
 */
class lightLoad{
    /**
     *
     */
    public function __construct(){
        spl_autoload_register(array($this, 'load'));
    }

    /**
     * @param $class name of load class
     */

	private function load($class){
        echo 'Trying to load ', $class, ' via ', __METHOD__, "()\n";
        include $class . '.php';
	}
}