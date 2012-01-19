<?php
    /***********************************************************************************
     * Read about autoload class ( http://php.net/manual/en/function.spl-autoload.php) *
     ***********************************************************************************/
    
    set_include_path(get_include_path().PATH_SEPARATOR."class_resource"); //Set the includepath
    
    	function load($class) {
			include $class.".php";
    	}

    spl_autoload_register('load');
?>