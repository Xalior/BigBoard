<?php

    require 'h2o/h2o.php';

    $h2o = new h2o('templates/index.html');

    echo $h2o->render();

?>
