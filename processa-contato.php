<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['mensagem']);

    $to = "issamu.rodrigo@gmail.com";
    $subject = "Contato - Portfólio Rodrigo";
    $body = "Nome: " . $nome . "\r\n" .
            "Email: " . $email . "\r\n" .
            "Mensagem: " . $mensagem;

    $header = "From: rodrigoissamuyakushijin@gmail.com\r\n";
    $header .= "Reply-To: " . $email . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {
        echo("Email enviado com sucesso!");
    } else {
        echo("Email não pôde ser enviado.");
    }

} else {
    echo("Preencha o formulário corretamente.");
}
?>
