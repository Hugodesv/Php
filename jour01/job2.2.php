<?php
$pkmn = $_GET ["pkmn"];

if ($pkmn == 1){
    $message = "Dracaufeu";
}
if ($pkmn == 2){ 
    $message = "bulbizarre";

}

if ($pkmn == 3){
    
    $message = "Tiplouf";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    <h1><?=$message;?></h1>
    </body>
</html>   