<?php
declare(strict_types=1);
ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
class blackJackPlayer
{
    public function startGame()
    {
        $hand = [
            rand(1, 11),
            rand(1, 10),
        ];
        $total = array_sum($hand);
        echo(implode(", ",$hand));
        echo('<br>' .$total);
        $_SESSION['totalValue'] = $total;
    }
    public function hit(){
        $cards = [
        ];
        $sessionValue = $_SESSION['totalValue'];
        $randomCard = rand(1, 11);
        array_push($cards, $sessionValue, $randomCard);
        $totalHit = array_sum($cards);
        echo ($totalHit);
        $_SESSION['totalValue'] = $totalHit;
    }

}