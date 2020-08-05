<?php
declare(strict_types = 1); // must be enable to allow strict typing
include 'includes/autoloader.iinc.php';

try {
  $person = new Person\Somebody('Kenneth','black',18);
} catch (TypeError $e) {
  echo "Error!: " .$e->getMessage();
}
