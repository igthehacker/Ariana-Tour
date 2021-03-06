<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:ihebfirstdatabaseserver.database.windows.net,1433; Database = tutorials", "iheb", "{Rachid5016}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "iheb", "pwd" => "{Rachid5016}", "Database" => "tutorials", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:ihebfirstdatabaseserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
