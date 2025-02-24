<?php 
session_name("greenit");
session_start();
session_destroy();
header('location: index.php');
exit;
?>