<?php
include 'DBConfig.php';
session_start();

$expireAfter = 150;

if(isset($_SESSION['username']) && isset($_SESSION['password'])){
    $secondsInactive = time() - $_SESSION['last_action'];
    
 
    $expireAfterSeconds = $expireAfter * 60;
    

    if($secondsInactive >= $expireAfterSeconds){

        echo "<script>document.cookie = 'role='</script>";
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        
        session_unset();
        session_destroy();
    }
}
else{
    echo "<script>alert('Please Login First')</script>";
    echo "<script>location.href='index.php'</script>";
}
?>