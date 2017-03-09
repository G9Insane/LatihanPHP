<?php
include "koneksi2.php";

	//$pass=md5($_POST[password]);

	mysql_query("INSERT INTO user(username,password,nama_lengkap,email,level,status)
VALUES('$_POST[username]','$_POST[password]','$_POST[nama_lengkap]','$_POST[email]','$_POST[level]','$_POST[status]')");

//$sql = "INSERT INTO user(username,password,nama_lengkap,email,level,status)VALUES('$_POST[username]','$_POST[password]','$_POST[nama_lengkap]','$_POST[email]','$_POST[level]','$_POST[status]')";

//if ($conn->query($sql)) {
//    echo "New record created successfully";
//} else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$conn->close();
?>