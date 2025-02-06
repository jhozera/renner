<?php

include_once("config.php"); 


if (!isset($conexao)) {
    die("Erro na conexão com o banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["NOME"];
    $email = $_POST["EMAIL"];
    $numero = $_POST["TELEFONE"];

    try {
   
        $sql = "INSERT INTO DADOS_RENNER_LP (NOME, EMAIL, TELEFONE) VALUES (?, ?, ?)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam(3, $numero, PDO::PARAM_STR);


        $stmt->execute();

        echo $mensagem;
       
        $whats = "https://api.whatsapp.com/send?phone=554130220411";

        header("Location: $whats");
        exit();
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
