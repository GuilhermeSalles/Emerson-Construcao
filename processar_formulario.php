<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $desc = $_POST["desc"];

    // E-mail de destino
    $to = "vendas.emersoncec@gmail.com";

    // Assunto do e-mail
    $subject = "Novo formulário de contato/orçamento";

    // Mensagem do e-mail
    $message = "Nome: $name\n";
    $message .= "E-mail: $email\n";
    $message .= "Telefone: $tel\n";
    $message .= "Descrição:\n$desc";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Enviar e-mail
    mail($to, $subject, $message, $headers);
     // Enviar e-mail
     if (mail($to, $subject, $message, $headers)) {
        // Redirecionar para a tela index.php
        header("Location: index");
        exit();  // Certifique-se de sair após o redirecionamento
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
