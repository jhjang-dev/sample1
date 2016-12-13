<?php
$id = 'jhjang';
$passwd = '1234';
$select_db = 'my_test';

$link = mysql_connect('localhost',$id,$passwd);
if(!$link){
	die('Not connected : '. mysql_error());
}
$db = mysql_select_db($select_db,$link);

if(!$db){
	die("Can't use test_db : " . mysql_error());
}

$sql = "select * from testa";
$res = mysql_query($sql);




