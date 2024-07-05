<?php
$score = $_GET ["score"];

if ($score >10) {
    $message = "Vous avez gagner";
}
if ($score <10){ 
    $message = "vous avez perdu";

}

if ($score ==10){ 
    $message = "Egalité";

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
        
        <h1><?= $message;?>
    </body>
</html> 
