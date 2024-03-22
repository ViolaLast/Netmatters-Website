<?php 
$envFilePath = '/home/violetalast/public_html/netmatters/.env';
$env = parse_ini_file($envFilePath);

// Access the database credentials
$dbHost = $env["DB_HOST"];
$dbUser = $env["DB_USER"];
$dbPassword = $env["DB_PASSWORD"];
$dbName = $env["DB_NAME"];

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// class Dbh{
//     private $servername;
//     private $username;
//     private  $password;
//     private $dbname;
//     private $charset;

// public function connect(){
//     $this -> servername = "localhost";
//     $this-> username = "Vilcreate";
//     $this -> password = "Viola";
//     $this -> dbname = "netmatters";
//     $this -> charset = "utf8mb4";

// try {
//     $dsn = "mysql:host=".$this -> servername.";dbname=".$this -> dbname.";charset=".$this -> charset;
//     $pdo = new PDO($dsn, $this->username, $this->password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     return $pdo;
// } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }

// }
// }

