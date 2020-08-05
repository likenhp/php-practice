<?php

spl_autoload_register('autoLoader');

function autoLoader($className) {
  $path = "classes/";
  $ext = ".class.php";
  $pathName = $path . $className . $ext;

  if (!file_exists($pathName)) {
    # allows a reak on the first file error
    return false;
  }

  include_once $pathName;
}