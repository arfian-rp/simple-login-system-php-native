<?php 

require 'init.php';

session_unset();
session_destroy();
$_SESSION=[];

setcookie('login', '', time()-1);
header('location: /');

?>