<?php
$user = readline();
$pass = "";
$login = "";
for($i = strlen($user)-1;$i>=0;$i--){
    $pass .= $user[$i];
}
for ($i=0; $i<=3;$i++){
    $login = readline();
    if($login == $pass){
        echo "User ".$user." logged in.";
        break;
    } else if ($i == 3){
        echo "User ".$user." blocked!";
    } else{
        echo "Incorrect password. Try again.".PHP_EOL;
    }
}