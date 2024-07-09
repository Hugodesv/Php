<?php

for ($i = 0; $i <= 100; $i++) {
   
    if($i %3 == 0 && $i %5 == 0 ) {

        echo "FizzBuzz (Multiple de 5 et 3)<br/>";



    }
    elseif($i %5 == 0) {

        echo "Buzz(Multiple de 5) <br/>";

    }


     elseif($i % 3 == 0) {
        echo "Fizz(Multiple de 3)<br/>";

    }
    else {
        echo "$i<br/>";
    }
}


echo "";


?>