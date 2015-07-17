<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$db_server = "localhost";
$db_name = "yungchen";
$db_user = "yungchen";
$db_passwd = "amitof0dam0";

if(!@mysql_connect($db_server, $db_user, $db_passwd))
        die("DB connection is failed!!");

mysql_query("SET NAMES utf8");

if(!@mysql_select_db($db_name))
        die("Can not use Database!!");
?> 
