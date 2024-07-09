<?php
$message = '';
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        $message .= "<b><u>$i</u></b><br />";
    } else {
        $message .= "$i<br />";
    }

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

<p><?=$message?></p>
    
</body>
</html>