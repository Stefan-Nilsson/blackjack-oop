<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);
session_start();
require 'blackjack.php';

echo('hello <br>');

$user = new blackJackPlayer();
$dealer = new blackJackPlayer;
$_SESSION['user']=$user;

//$user->giveNewCard();
// $user->showTotalCardValue();
//$user->totalValue;
// $user->scoreProperties;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['hit'])) {
        $user->giveNewCard();
    }
    if (isset($_POST['startGame'])) {

        $user->startGame();
        array_combine($_SESSION['user']->hand, $user->hand);
    }
}
var_dump($_SESSION['user']->hand);
/*
if (isset($_POST['hit'])){
    echo($user->giveNewCard());
}*/

whatIsHappening();



?>

