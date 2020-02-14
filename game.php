<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
session_start();
require 'blackjack.php';

echo('hello <br>');

$user = new blackJackPlayer();
$dealer = new blackJackPlayer();
$_SESSION['user']=$user;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['hit'])) {
        $user->hit();
    }
    if (isset($_POST['hit'])) {
        $user->hit();
    }
    $user->startGame();

}

whatIsHappening();


