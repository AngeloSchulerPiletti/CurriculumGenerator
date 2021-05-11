<?php
include 'App/Checkers/urlChecker.php';
include 'App/Controller/RouteController.php';

use App\Checkers\urlCheckers;
use App\Controller\RouteController;

function solveURL(){
$checkURL = new urlCheckers();
$dir = $checkURL->path();

$goTo = new RouteController();
$goTo->route($dir);
}





