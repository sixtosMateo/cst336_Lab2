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
           determineWinners(generatePlayField());
           
        ?>
        
        <br>
        <button onClick = "window.location.reload()" type = "button">Play again!</button>
        
        <footer>
            &copy; Created by: Maria Rivera, Daniel Pesqueda, Mateo Sixtos, Brayanne Reyes
        </footer>
        
    </body>
    
</html>

</DOCTYPE>


