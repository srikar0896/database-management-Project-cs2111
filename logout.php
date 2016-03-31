<?php
require 'user.inc.php';
@ob_start();
unset($_SESSION['user_id']);
@session_start();
@session_destroy();
header('Location:index.php');
?>