<?php

include_once("config.php"); 


if (!isset($conexao)) {
    die("Erro na conexão com o banco de dados.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];

    try {
   
        $sql = "INSERT INTO leads_renner (nome, email, numero) VALUES (?, ?, ?)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $email, PDO::PARAM_STR);
        $stmt->bindParam(3, $numero, PDO::PARAM_STR);


        $stmt->execute();


        // $mensagem = 'Obrigado por atualizar seus dados, até 24horas um dos nossos especialista vão entrar em contato';

        // echo $mensagem;
       
        // $whats = "https://api.whatsapp.com/send?phone=554130220411";

        // header("Location: $whats");
        // exit();
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
