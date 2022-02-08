<?php
session_start();
session_unset();
session_destroy();
echo'<script type="text/javascript">
alert("Has cerrado sesion correctamente");
window.location="index.php";
</script>';
?>