<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="sipka.css" type="text/css">
    
  </head>
  <body>
  <div class="obal">
    <div class="hlavicka">
      Toto je hlavička
    </div> <!--KONEC HLAVIČKA -->
    
    <div class="pas">
    <div class="levy">
      <?php  require("menu.php");   ?>
    </div> <!-- KONEC LEVY-->
        
      <?php
        if (isset($_GET['stranka']))    //testuju zda jde o prvni zobrazeni, bez kliknuti na menu 
        {
          require($_GET['stranka'].".php");
            
          //  @require($_GET['stranka'].".php");//potlačí výpis chyby 
        }
        else
        {
          require("uvod.php");
            
        }
      ?>
    <div class="obsah">

    </div> <!-- KONEC OBSAH-->
    </div> <!-- KONEC PAS -->

    <div class="paticka">
      Patička
    </div> <!-- KONEC PATIČKA-->
  </div> <!-- KONEC OBAL -->
    


  </body>
</html>