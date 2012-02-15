<?php
#ini_set('display_errors', 'On');
#error_reporting(E_ALL);
require_once ('bigboard.php');

foreach($query_modules as $module) {
#    print_r($module);
    echo(json_encode($module->xhr()));
}
