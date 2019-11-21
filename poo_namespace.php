<?php
include 'first/Client.php';
include 'second/Client.php';

/*
$client1 = new \Dta\First\Client();
$client1->sayHello();

echo "<br><br>";

$client2 = new \Dta\Second\Client();
$client2->sayHello();
*/

use \Dta\First\Client as Client1;
use \Dta\Second\Client as Client2;

$client1 = new Client1();
$client1->sayHello();

echo "<br><br>";

$client2 = new Client2();
$client2->sayHello();


