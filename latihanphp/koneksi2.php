<?php
$server		= "localhost";
$username 	= "root";
$password 	= "";
$database	= "enam-c";

mysql_connect($server,$username,$password) or die("koneksi gagal");
mysql_select_db($database) or die ("Database tidak bisa dibuka");
?>