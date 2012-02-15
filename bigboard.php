<?php

define('BIGBOARD_VERSION', '0.4');
defined('BIGBOARD_ROOT') or define('BIGBOARD_ROOT', dirname(__FILE__) . '/' );
defined('BIGBOARD_MODULES') or define('BIGBOARD_MODULES', BIGBOARD_ROOT.'lib/modules/');


require_once(BIGBOARD_ROOT.'lib/base/BigBoardModuleInterface.php');
require_once(BIGBOARD_ROOT.'lib/funk.php');

//This is where the modules live, once registered....
$query_modules = array();

$handler = opendir(BIGBOARD_MODULES);
while ($file = readdir($handler)) {
    // if file isn't this a module definition don't load it
    if (preg_match("/Module.php$/", $file)) {
        require_once(BIGBOARD_MODULES.$file);
    }
}
closedir($handler);

require_once(BIGBOARD_ROOT.'settings.php');
