<?php
$server		= "localhost";
$username 	= "root";
$password 	= "";
$dbname = "enam-c";
$database	= "enam-c";

//mysql_connect($server,$username,$password) or die("koneksi gagal");
//mysql_select_db($database) or die ("Database tidak bisa dibuka");


// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user(username,password,nama_lengkap,email,level,status)
VALUES('$_POST[username]','$_POST[password]','$_POST[nama_lengkap]','$_POST[email]','$_POST[level]','$_POST[status]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
?>

