<?php
// Função para inserir um novo registro no banco de dados
    function inserirRegistro($pdo, $nome, $email, $senha) {
        // Insere os dados na tabela USER, que é a correta de acordo com o banco de dados
        $sql = "INSERT INTO USER (USER_NAME, EMAIL, PASSWORD) VALUES (:USER_NAME, :EMAIL, :PASSWORD)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':USER_NAME', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':EMAIL', $email, PDO::PARAM_STR);
        $stmt->bindParam(':PASSWORD', $senha, PDO::PARAM_STR);
        return $stmt->execute();
    }
?>