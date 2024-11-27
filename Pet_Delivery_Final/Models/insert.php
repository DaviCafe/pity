<?php

require ('Conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $nome = $_POST["USER_NAME"];
    $email = $_POST["EMAIL"];
    $senha = password_hash($_POST["PASSWORD"], PASSWORD_BCRYPT); // Hash da senha para segurança
    echo "Nome: " . $nome . "<br>Email: " . $email . "<hr>";

    // Verifica se a inserção foi bem-sucedida
    if (inserirRegistro($pdo, $nome, $email, $senha)) {
        echo "Cadastro realizado com sucesso!<br><a href='menu.php'>HOME</a>";
    } else {
        echo "Erro ao fazer Cadastro.";
    }
}
?>
