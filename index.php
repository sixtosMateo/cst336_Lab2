<DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <meta charset="utf-8"/>
        
    </head>
    
    <body>
        <h1>Let's Play Silver Jack!</h1>
        <?php
           include 'includes/functions.php';
           $players = array();
           echo "<img src = 'img/f1.png'>";
           $player1 = generateGame();
           echo $player1 . "<br>";
            
           echo "<img src = 'img/f2.png'>";
           $player2 = generateGame();
           echo $player2 . "<br>";

           echo "<img src = 'img/f3.png'>";
           $player3 = generateGame();
           echo $player3 . "<br>";


           echo "<img src = 'img/f4.png'>";
           $player4 = generateGame();
           echo $player4 . "<br>";
          
    
           array_push($players, $player1, $player2, $player3, $player4);
           $max = abs($players[0] - 42);


            for($i = 1; $i < count($players); $i++){
                if(abs($players[$i] - 42) <= $max){
                    $max = $players[$i] - 42;
                    $winner = $i;
                }
            }

            
            switch($winner){
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
            }  
        ?>
        
        <br>
        <button onClick = "window.open('index.php')" type = "button">Play again!</button>
        
        <footer>
            &copy; Created by: Maria Rivera
        </footer>
        
    </body>
    
</html>

</DOCTYPE>


