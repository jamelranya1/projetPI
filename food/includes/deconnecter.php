<?php
session_start();//3lech ..
$_SESSION = array();//3lech nfasa5hom
session_destroy();//maa3dch fema session 
header('location: ../login.php');
exit;
?>