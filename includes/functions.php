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
    $winner = array();
    $differenceArr = array();
    $winningNumber = 42;
    
    for($i = 0; $i < count($players); $i++){
        array_push($differenceArr,abs($players[$i] - $winningNumber) );
    }
    
    $winningPlayer = min($differenceArr);
    
    for($i = 0; $i < count($players); $i++){
        if($winningPlayer == $differenceArr[$i]){
            array_push($winner,$i);
        }
    }
    
    
    
    return $winner;
}

function printWinMSG($winner){
    if(sizeof($winner) == 1){
        switch($winner[0]){
            case 0:
            echo "<h4>Brayanne won!</h4>";
            break;
            case 1:
            echo "<h4>Maria won!</h4>";
            break;
            case 2:
            echo "<h4>Mateo won!</h4>";
            break;
            case 3:
            echo "<h4>Daniel won!</h4>";
            break;
            default: "<h4>Error!</h4>";
            break;
        }
    }
    else{
        echo "<h4>Tie!</h4>";
    }
}


?>