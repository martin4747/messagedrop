<?php
//Variables for connecting to your database.
//These variable values come from your hosting account.

$dbhostname = "messagedrop.db.7713953.hostedresource.com";
$dbuser = "messagedrop";
$dbname = "messagedrop";

//this is definitely not secure
$dbpassword = "Jenk1nsStreet!";

//Connecting to your database
$sqlconn = mysqli_connect($dbhostname, $dbuser, $dbpassword) OR DIE("Unable to 
            connect to database! Please try again later.");

mysqli_select_db($sqlconn,$dbname);

?>
