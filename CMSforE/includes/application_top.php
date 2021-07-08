<?php
session_start();
$link = mysql_connect("localhost","root","daotientu2801")
or die ("Error: Could not connect to MySQL Database.");
mysql_select_db("fithoub1db",$link);

if(!isset($_SESSION['logged']))
{
	header('Location: login.php');
}
?>