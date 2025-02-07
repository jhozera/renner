<?php
$host = 'JHONATAN\SQLEXPRESS';           
$dbname = 'LADING';     
$username = '';                
$password = '';                

try {
   
    $conexao = new PDO("sqlsrv:Server=$host;Database=$dbname", $username, $password);
    
   
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo ""; 
} catch (PDOException $e) {
    echo " " . $e->getMessage();
    die();
}

?>
