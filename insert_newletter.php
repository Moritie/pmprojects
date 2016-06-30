<?php

# CONFIGURATION
$CONFIG['host'] = "localhost";
$CONFIG['name'] = "dbpmprojects";
$CONFIG['user'] = "root";
$CONFIG['pass'] = "";
# IDENTIFICATION
$connection = null;
$result = null;
$user = null;
$password = null;
$username = null;
if ( isset( $_REQUEST['username'] ) && $_REQUEST['username'] != "" && isset( $_REQUEST['password'] ) && $_REQUEST['password'] != "" )
{
$username = trim( addslashes( $_REQUEST['username'] ) );
$password = $_REQUEST['password'];
$connection = @mysql_connect( $CONFIG['host'], $CONFIG['user'], $CONFIG['pass'] );
if( $connection != null && $connection )
{
if ( @mysql_select_db( $CONFIG['name'], $connection ) )
{
$result=mysql_query("insert into abonnnewsletter values('','".$username."','".$password."'");

if ( $result != null && $result && !empty( $result ))
{echo 1; } else {echo 0;}

} else { print "Aucun compte n'est associ&eacute; a ce nom d'utilisateur !";}
} else { print "Veuillez ex&eacute;cuter la routine d'installation avant de tester ce script !";}
} else { print "Impossible de s&eacute;lectionner la base de donn&eacute;e !";}


?> 