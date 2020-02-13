<?php
declare(strict_types=1);
require 'blackjack.php';
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
session_start();


echo('hello');

$user = new blackJackPlayer;
$dealer = new blackJackPlayer;

$user->varHit();
$user->changeValue();
$user->totalValue;
$user->scoreProperties;

whatIsHappening();


// refresh button



?>

