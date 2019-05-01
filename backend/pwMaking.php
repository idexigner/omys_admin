<?php

echo password_hash("ahmed786+",PASSWORD_BCRYPT,["cost"=>7]);
echo "</br>";

if(password_verify("ahmed786+",'$2y$07$vo7Tk6HnmwPJKrFUzdRP4eUKCPqsokQjyy7KLeck.QtBpeEouiSMe')) {
    echo "True";
}
else{
    echo "False";
}
//markatiya786+
//ahmed786+

?>