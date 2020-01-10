<?php
 
$code = $_POST['inputLogin'];
$psw = "BMEBPC";
if(empty($code)){
    header("Location: index.php");
    exit();
}
 
if (strcasecmp($code, $psw) == 0) {
    session_start();
    $_SESSION["session"]=1;
    header("Location: main.php");
}else{
    header("Location: index.php");
    exit();
}
 
 
?>
