<?php
try {
    $conexao = new PDO('sqlsrv:Server=JHONATAN\SQLEXPRESS;Database=LADING', null, null);
    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conectado com sucesso ao banco de dados!";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
?>
    