<?php

$external_id = $_POST['external_id'];

$server = "localhost";
$user = "";
$pass = "";
$db = "";

$con = mysql_connect($server, $user, $pass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db, $con);

$sql = "SELECT meta_value FROM wp_postmeta WHERE post_id = $external_id AND meta_key = 'wp-svbtle-kudos'";
$result = mysql_query($sql,$con);
$kudos =  mysql_result($result,0);

$kudos = ($kudos + 1);

mysql_query("UPDATE wp_postmeta SET meta_value = $kudos WHERE post_id = $external_id AND meta_key = 'wp-svbtle-kudos'");

mysql_close($con);

?>