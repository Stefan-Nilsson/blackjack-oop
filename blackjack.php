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
    // property declaration

    public $score;
    // declare totalValue variable and set startValue at 0
    public $totalValue = 0;
    // Array for card collection values (the cards the player will have)
    public $hand = [];
    // Player's score
    public $scoreProperties = [
        'maxScore' => 21,
    ];
    public $cardProperties = [
        'minValue' => 1,
        'maxValue' => 11,
    ];

    public $vocabulary = [
        'surrender'     => 'You have given up',
        'win'           => 'You have won the round',
        'newCard'       => 'The dealer hands you a card with value: ',
        'startSession'  => 'You have started the game',
        'lose'          => 'You have lost the round',
        'stand'         => 'You let the dealer play',
    ];


    // method declaration:

    // function to talk
    public function talk($words)
    {
        echo($words);
    }


    // function to insert the card into an array
    public function hit($cardValue)
    {
        array_push($this->hand, $cardValue);
    }

    // function to calculate the sum of the complete array
  //  public function calcSum($hand)
  //  {
   //     return array_sum($hand);
   // }

    // function to insert the sum into the variable totalValue
   // public function showTotalCardValue()
    //{
    //    $this->totalValue = $this->calcSum($this->hand);
    //}

    // generateNumbersBetweenValueMinAndValueMax
    public function randomNumber($min, $max)
    {
        return rand($min, $max);
    }

    public function giveNewCard(){
        $this->hit($this->randomNumber($this->cardProperties['minValue'], $this->cardProperties['maxValue']));
        echo($this->vocabulary['newCard'] . $this->hand[0]);
    }
    public function stand($user){
        // ends turn, starts dealers round, probably with an interval or something
    }
}


if (isset($_POST['refresh'])) {
    if ($_POST['refresh']) {


// Unset all of the session variables.
        $_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    }
// Finally, destroy the session.
    session_destroy();
// start new session
  //  session_start();
// refresh page
    header('refresh');
}

//nice to have's:
/*
    array consisting of 52 to 6x52 cards and rand_array function to take cards out of the rand_array
    class cards{
    property declaration:
        }
    */
?>