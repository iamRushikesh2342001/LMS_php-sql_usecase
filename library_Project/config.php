<?php
$host = "php1server.database.windows.net";
$username = "php1server";
$password = "azure123456789";
$database = "phpdb";

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $database, 3306, MYSQLI_CLIENT_SSL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);
if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>