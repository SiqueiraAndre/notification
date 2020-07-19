<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2,'smtp1.example.com', 'user@exemple.com','secret','tls',587,
    'from@exemple.com','Mailer');
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste!</b></p>","siqueira.andre@gmail.com", "André Siqueira");

var_dump($novoEmail);