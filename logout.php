<?php
ini_set('session.save_path',realpath(dirname($_SERVER['DOCUMENT_ROOT']) . '/tmp'));
ini_set('session.gc_probability', 1);
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header ('Location: index.php');
exit;
?>