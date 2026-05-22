<?php

//var_dump($_POST);  
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o campo 'email' foi enviado e não está vazio
    if (!empty($_POST['email'])) {
        $email = $_POST['email'];
        echo "Email recebido: " . $email;
    } else {
        echo "Email não enviado ou está vazio!";
    }

    // Verifica se a senha foi enviada e não está vazia
    if (!empty($_POST['senha'])) {
        $senha = $_POST['senha'];
        echo "<br>Senha recebida: " . $senha;
    } else {
        echo "<br>Senha não enviada ou está vazia!";
    }
} else {
    echo "Formulário não foi enviado.";
}
?>