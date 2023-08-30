<?php

require 'database.php';

$db = new database('localhost', 'root', '', 'eskul');

// $db->addfilm('elemental.jpeg', 'Elemental', 'Animation', '4,9');

$db->readfilm();




?>