<?php

include_once 'newclass.inc.php';

$person1 = new Somebody('Kevin','black','18');
unset() // <-- will destroy the person1 object
// $person1->setPerson('Kevin','black','18');

$person2 = new Somebody('Kenneth','black','18');
// $person2->setPerson('Kenneth','black','18');
