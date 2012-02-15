<?php
/**
 * Convenient wrapper for setting up a query or output module
 * @param $module
 * @param $options - optional options - yay - used to alter module
 */
function register($name, $options = array()) {
    global $query_modules;
    $query_modules[] = new $name($options);
}
