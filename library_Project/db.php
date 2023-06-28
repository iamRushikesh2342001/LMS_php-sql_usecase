<?php 
class db{
protected $connection;

function setconnection(){
   try{
       $this->connection=new PDO("mysql:host=; dbname=library_managment","root","");
        
    }catch(PDOException $e){
       echo "Error";
        
   }
} 
}
// <?php
// // PHP Data Objects(PDO) Sample Code:
// try {
//     $conn = new PDO("sqlsrv:server = tcp:php1server.database.windows.net,1433; Database = phpdb", "php1server", "Azure123456789");
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }
// catch (PDOException $e) {
//     print("Error connecting to SQL Server.");
//     die(print_r($e));
// }

// $connectionInfo = array("UID" => "php1server", "pwd" => "Azure123456789", "Database" => "phpdb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:php1server.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
// ?>

