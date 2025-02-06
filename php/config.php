<?php
$host = 'trc-dc-bd2';           
$dbname = 'Planejamento';     
$username = '';                
$password = '';                

try {
   
    $conexao = new PDO("sqlsrv:Server=$host;Database=$dbname", $username, $password);
    
   
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Sucesso"; 
} catch (PDOException $e) {
    echo "Falha: " . $e->getMessage();
    die();
}
?>
