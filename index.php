<DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <meta charset="utf-8"/>
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    
    <body>
        <h1>Let's Play Silver Jack!</h1>
        <?php
           include 'includes/functions.php';

           $playerScores = generatePlayField();
           $winnersList = determineWinners($playerScores);

//<<<<<<< HEAD

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
//=======
           printWinMSG($winnersList);
           
//>>>>>>> refs/remotes/origin/master
        ?>
        
        <br>
        <button onClick = "window.location.reload()" type = "button">Play again!</button>
        
        <footer>
            &copy; Created by: Maria Rivera, Daniel Pesqueda, Mateo Sixtos, Brayanne Reyes
        </footer>
        
    </body>
    
</html>

</DOCTYPE>


