<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "1ggmpc@gmail.com";
    $assunto = "Mensagens de contato - GGMPC";

    $corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabecalho = "From: teste@ggmpc.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabecalho)) {
        echo ("E-mail enviado com sucesso!");
    }else{
        echo ("Ocorreu um erro ao envial o E-mail!");
    }

?>