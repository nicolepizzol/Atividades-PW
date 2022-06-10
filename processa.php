<?php

    // Variáveis de Formulário
    $nome = $_POST["nome"];
    $cep = $_POST["cep"];
    $estado = $_POST["estado"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $complemento = $_POST["complemento"];

    // Variáveis de Arquivo
    $nomeImagem = $_FILES["foto"]["name"];
    $tipoImagem = $_FILES["foto"]["type"];
    $dirTemporario = $_FILES["foto"]["tmp_name"];
    $dirMove = "imagens/" . $nomeImagem; 

    if($tipoImagem == "image/jpeg" || $tipoImagem == "image/png") {
        if( move_uploaded_file( $dirTemporario, $dirMove )){

            echo("
                    <h3>Nome: $nome</h3>
                    <h3>CEP: $cep</h3>
                    <h3>Estado: $estado</h3>
                    <h3>Cidade: $cidade</h3>
                    <h3>Bairro: $bairro</h3>
                    <h3>Logradouro: $logradouro</h3>
                    <h3>Número: $numero</h3>
                    <h3>Complemento: $complemento</h3>
            ");
        }
       }else {
        echo("
                    <h3>Não foi possível enviar a imagem para o servidor. Selecione um arquivo JPG ou PNG.</h3><br>
                    <br><br>
                    <a href='http://localhost/exemplos/pw-carlos/formulario.php'> Voltar</a>
            ");

       }


?>