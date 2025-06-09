<!DOCTYPE html>
<html lang='cs'>
    <head>
        <title>Formule 1 - <?php echo isset($_GET['stranka']) ? ucfirst($_GET['stranka']) : 'Úvod'; ?></title>
        <meta charset='utf-8'>
        <link rel="stylesheet" href="styl.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Titillium+Web:wght@600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="obal">
            <div class="hlavicka">
                <?php require("hlavicka.php"); ?>
            </div> <!--KONEC HLAVIČKA -->
    
        <div class="pas">
            <div class="levy">
                <?php require("navigace.php"); ?>
            </div> <!-- KONEC LEVY-->
        
            <div class="obsah">
                <?php
                    if (isset($_GET['stranka']))   
                    {
                        $povolene_stranky = ['uvod', 'tymy', 'jezdci', 'kalendar', 'historie', 'technika', 'novinky', 'kontakt'];
                        $stranka = $_GET['stranka'];
                        if (in_array($stranka, $povolene_stranky)) 
                        {
                            require($stranka . ".php");
                        } 
                        else
                        {
                            require("domu.php");
                        }
                    }   
                    else   
                    {
                        require("domu.php");
                    }
                ?>
            </div> <!-- KONEC OBSAH-->
        </div> <!-- KONEC PAS -->

        <div class="paticka">
            <?php require("paticka.php"); ?>
        </div> <!-- KONEC PATIČKA-->
    </div> <!-- KONEC OBAL -->
    </body>
</html>