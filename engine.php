<?php
require 'vendor/autoload.php';


$dota2 = new \engine\Drivers\Dota2api\Dota2api();
echo $dota2->getHeroes('somename');

