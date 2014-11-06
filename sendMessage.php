<?php
include 'dbinfo.php';

$lat = $_POST["lat"];
$long = $_POST["long"];
$message = $_POST["message"];
$user_send = $_POST["usersend"];
$user_receive = $_POST["userreceive"];

$insert = "INSERT INTO  `messagedrop`.`MESSAGE` (`FK_USER_ID_RECEIVE` ,`FK_USER_ID_SEND` ,`LAT` ,`LONG` ,`MESSAGE_TXT`) 
	VALUES ('$user_receive', '$user_send', '$lat', '$long', '$message')";

//echo $insert;
$result = mysqli_query($sqlconn,$insert);

echo json_encode($result);

//* Free connection resources. */

//mysqli_close($sqlconn);

?>
