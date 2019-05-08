<?php

echo password_hash("guest999+",PASSWORD_BCRYPT,["cost"=>7]);
echo "</br>";
// guest999+
if(password_verify("ahmed786+",'$2y$07$vo7Tk6HnmwPJKrFUzdRP4eUKCPqsokQjyy7KLeck.QtBpeEouiSMe')) {
    echo "True";
}
else{
    echo "False";
}
//markatiya786+
//ahmed786+

?>