<DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <meta charset="utf-8"/>
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    
    <body>
        
        <div>
            <h1>Let's Play Silver Jack!</h1>
            <?php
               include 'includes/functions.php';


               $playerScores = generatePlayField();
               $winnersList = determineWinners($playerScores);
               printWinMSG($winnersList);

            ?>

            <br>
            <button onClick = "window.location.reload()" type = "button">Play again!</button>

            <footer>
                <hr>
                &copy; Created by: Maria Rivera, Daniel Pesqueda, Mateo Sixtos, Brayanne Reyes
            </footer>
        </div>
        
    </body>
    
</html>

</DOCTYPE>


