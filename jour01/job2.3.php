<?php
$blgr = $_GET ["blgr"];

if ($blgr == "Theo"){
    $message = "Théo a acheté 3 pain au chocolat et 3 brioche ";
}
if ($blgr == "Walid"){ 
    $message = "Walid a acheté 6 croissant et 7 pains au chocolat ";

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