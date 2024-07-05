    <?php
$blgr = $_GET ["blgr"];
$PainChocos = 0;
$Brioches = 0;
$Croissants = 0;

if ($blgr == "Theo"){
    $Brioches = "à 2 Brioches";
    $PainChocos = "3 pains choco";
}
if ($blgr  == "Walid"){ 
    
   $Brioches = "à 5 Brioches";
   $PainChocos = "4 pains choco";
   $Croissants = "3 croissant";
}


$message1 = $Brioches;
$message2 = $Croissants;
$message3 = $PainChocos;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
  <h1> <?=$message1 ?></h1>
  <h1> <?=$message2 ?></h1>
  <h1> <?=$message3 ?></h1>
    </body>
</html>   