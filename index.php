<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


echo('hello');


class blackJackPlayer
{
    // property declaration


    public $surrender;
    public $totalValue = 0;
    // Array for card collection values
    public $arrayCollection = [11,22];

    public $scoreProperties = [
        'maxScore' => 21,
    ];
    public $cardProperties= [
        'minSingleCardValue' => 1,
        'maxSingleCardValue' => 11,
    ];


    // method declaration
    public function hit($card, $arrayName) {
        array_push($card, $arrayName);
    }
    // function to calculate the sum of the complete array
    public function calcSum($arrayWithValues){
        return array_sum($arrayWithValues);
    }
    public function changeValue(){
        $this->totalValue=$this->calcSum($this->arrayCollection);
    }
// generateNumbersBetweenValueMinAndValueMax
    public function randomNumber($min, $max)
    {
        return rand($min, $max);
    }
$this->
    public $varHit = ($this ->randomNumber($this->cardProperties['minSingleCardValue'], $this->cardProperties['maxSingleCardValue']), $this->arrayCollection);
}

$user = new blackJackPlayer;
$dealer = new blackJackPlayer;

$user ->varHit;
$user->totalValue;
//$user ->calcSum($user->arrayCollection);
//require 'game.php';
?>