<?php

include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];


    try {
        $sql = "INSERT INTO dados_renner (NOME, EMAIL, NUMERO) VALUES (?, ?, ?) 
                ON DUPLICATE KEY UPDATE NOME = ?, EMAIL = ?, NUMERO = ?";


        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam(3, $numero, PDO::PARAM_STR);
        $stmt->bindParam(4, $name, PDO::PARAM_STR);
        $stmt->bindParam(5, $email, PDO::PARAM_STR);
        $stmt->bindParam(6, $numero, PDO::PARAM_STR);

        $stmt->execute();


        $whats = "https://api.whatsapp.com/send?phone=554130220411";


        header("Location: $whats");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
