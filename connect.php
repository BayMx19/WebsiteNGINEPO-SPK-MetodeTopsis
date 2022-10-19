<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dbase="indekos.sql";
	
	$koneksi=mysql_connect($host,$user,$pass);
	if(!$koneksi){
		die("Database mysql tidak terkoneksi");
	}
	
	$seleksi=mysql_select_db($dbase,$koneksi);
	if(!$seleksi){
		die("Database tidak terseleksi");
	}
?>