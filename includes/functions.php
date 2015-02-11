<?php

function generateRanSuit()
    {
        $suit =rand(1,4);
        switch($suit)
                {
                case 1:
                $folder = "clubs";
                break;
                case 2:
                $folder = "diamonds";
                break;
                case 3:
                $folder = "hearts";
                break;
                case 4:
                $folder = "spades";
                break;
            }
        return $folder;
    }

function generateArray()
    {
    $handArray= array();
    $count  = 0;
    
    while($count < 5)
    {
        $cardNumber =rand(1,13);
        if(in_array($cardNumber,$handArray))
            {
            continue;
        }
        else
            {
            $handArray[]= $cardNumber;
            $count++;
        }
    }
     return $handArray;   
    }

function generateGame()
    {
    $player = generateArray();
   
    foreach($player as $p)
        {
        echo "<img src='img/cards/". generateRanSuit(). "/".$p.".png'>"; 
    }
    $sum = array_sum($player);
    return $sum;
 
}



?>