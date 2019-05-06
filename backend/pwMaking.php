<?php

echo password_hash("guest999+",PASSWORD_BCRYPT,["cost"=>7]);
echo "</br>";

if(password_verify("guest999+",'$2y$07$ADaVx6n5aIgdSun3WsomjuAK7Klk4pkaD7LZbcD8R.bYO.iTXIPQa')) {
    echo "True";
}
else{
    echo "False";
}
//markatiya786+
//ahmed786+

?>