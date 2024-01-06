<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "uniguine@gmail.com"; 

    $assunto = "Nova mensagem do formulário de contato";
    $corpo = "Nome: $nome\n";
    $corpo .= "Email: $email\n";
    $corpo .= "Mensagem:\n$mensagem";

    mail($destinatario, $assunto, $corpo);
}
