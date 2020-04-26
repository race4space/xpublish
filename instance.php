<?php
if( ob_get_level() > 0 ) {ob_end_flush();}ob_implicit_flush(true);//TURN OFF BUFFERING
?>
<?php
require_once("vendor/autoload.php");
$obj_auth=new \phplibrary\Auth();
$obj_auth->fn_check();

$con_user="newuser";
$con_pass="myPassword.abc";
$obj_xpublish=new \phpxpublish\XPublish($con_user, $con_pass);
$obj_xpublish->fn_execute();
?>
