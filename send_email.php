<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  $to = "contato@pontogastroassistencia.com.br";
  $subject = "Contato do site: $name";
  $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo "Mensagem enviada com sucesso!";
  } else {
    echo "Erro ao enviar a mensagem.";
  }
}
?>