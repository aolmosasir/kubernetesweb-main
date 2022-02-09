<?php
session_save_path('/var/www/html/tmp');
ini_set('session.gc_probability', 1);
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header ('Location: index.php');
exit;
?>