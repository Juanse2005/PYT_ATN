<?php
$db = new mysqli('localhost', 'root', '','db_atn');
$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0)
{

	die('Unable to connect to database [' .  $db->connect_error . ']');

}
?>