<?php
  /*
    MVC Model

    model handles the database
    model updates view
    model updates the controller
    view visualizes for the user
    controller is updated by the user's actions
  */

include_once 'newclass.inc.php';

$pet01 = new Pet();
echo $pet01->owner(); // -> can set a property or call a method
