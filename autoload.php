<?php

function appAutoload($class){
    include $class . '.php';
}

spl_autoload_register("appAutoload");