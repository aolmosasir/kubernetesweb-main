<?php
session_save_path('/var/www/html/tmp');
ini_set('session.gc_probability', 1);
session_start();
$username = $_POST['usuario'];
$password = $_POST['password'];

$ldapconfig['host'] = 'khodjent.aspnet.com';
$ldapconfig['port'] = '389';
$ldapconfig['basedn'] = 'dc=khodjent,dc=aspnet,dc=com';
$ldapconfig['usersdn'] = 'ou=People'; //CHANGE THIS TO THE CORRECT USER OU/CN
$ds = ldap_connect($ldapconfig['host'], $ldapconfig['port']);

ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ds, LDAP_OPT_REFERRALS, 0);
ldap_set_option($ds, LDAP_OPT_NETWORK_TIMEOUT, 10);

$dn = "uid=" . $username . "," . $ldapconfig['usersdn'] . "," . $ldapconfig['basedn'];
if (isset($_POST['usuario']))
{
    if ($bind = ldap_bind($ds, $dn, $password))
    {
        $_SESSION["usuario"] = $username;

        header ('Location: index.php');
        exit;
    }
    else
    {

        echo '<script type="text/javascript">
    alert("No ha sido posible iniciar sesion");
    window.location="login.php";
    </script>';
    }
}

