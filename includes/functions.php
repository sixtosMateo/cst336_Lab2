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

function generatePlayField(){
    $players = array();
    $images = array("f1","f2","f3", "f4");
    
    for($index = 0; $index < count($images); $index++){
        echo "<img src = 'img/".$images[$index].".png'>";
        array_push($players,generateGame());
        echo $players[$index] . "<br>";
    }
    
    return ($players);
}

function determineWinners($players){
    $max = max($players);
    $winner = array();

    for($i = 0; $i < count($players); $i++){
        if($players[$i] >= $max){
           array_push($winner,$i);
        }
    }
    
    if(sizeof($winner) == 1){
        switch($winner[0]){
            case 0:
            echo "Brayanne won!";
            break;
            case 1:
            echo "Maria won!";
            break;
            case 2:
            echo "Mateo won!";
            break;
            case 3:
            echo "Daniel won!";
            break;
            default: "Error!";
            break;
        }
    }
    else{
        echo "Tie!";
    }
}



?>