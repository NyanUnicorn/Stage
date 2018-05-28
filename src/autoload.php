<?php
spl_autoload_register('autoload');

//permet d'auto-charger les classes
function autoload($class){
  //echo $class;
  require_once __DIR__ . '/' . $class . '.php';
}
