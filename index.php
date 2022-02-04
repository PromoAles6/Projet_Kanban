<?php
require 'vendor/autoload.php';
$bonjour= ["Bonjour","Coucou", "Hola"];
dump($bonjour);

use App\Test;
$Test = new Test;
$Test->test();