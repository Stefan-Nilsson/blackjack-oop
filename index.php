<?php

declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);


echo('hello');


class blackJackPlayer
{
    // property declaration


    public $score;
    // declare totalValue variable and set startValue at 0
    public $totalValue = 0;
    // Array for card collection values
    public $arrayCollection = [11, 22];

    public $scoreProperties = [
        'maxScore' => 21,
    ];
    public $cardProperties = [
        'minValue' => 1,
        'maxValue' => 11,
    ];


    // method declaration:

    // function to insert the card into an array
    public function hit($arrayName, $cardValue)
    {
        array_push($arrayName, $cardValue);
    }

    // function to calculate the sum of the complete array
    public function calcSum($arrayWithValues)
    {
        return array_sum($arrayWithValues);
    }

    // function to insert the sum into the variable totalValue
    public function changeValue()
    {
        $this->totalValue = $this->calcSum($this->arrayCollection);
    }

    // generateNumbersBetweenValueMinAndValueMax
    public function randomNumber($min, $max)
    {
        return rand($min, $max);
    }

    public function varHit(){
        $this->hit($this->arrayCollection,$this->randomNumber($this->cardProperties['minValue'], $this->cardProperties['maxValue']));
}
    public function stand(){
    // end turn code
}

}

$user = new blackJackPlayer;
$dealer = new blackJackPlayer;

$user->varHit();
$user->changeValue();
$user->totalValue;
$user->scoreProperties;
?>