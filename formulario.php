<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <section>
            <form action="processa.php" method="post" enctype="multipart/form-data" >
                <div>
                    <label>Nome:</label>
                    <input type="text" name="nome" id="form-nome" required>
                </div><br>
                <div>
                    <label>CEP:</label>
                    <input type="text" name="cep" id="form-cep"  required>
                </div><br>
                <div>
                    <label >Estado:</label>
                    <select name="estado" id="form-estado" required>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                    </select> 
                </div><br>
                <div>
                    <label >Cidade:</label>
                    <input type="text" name="cidade" id="form-cidade"  required>
                </div><br>
                <div >
                    <label >Bairro:</label>
                    <input type="text" name="bairro" id="form-bairro"  required>
                </div><br>
                <div>
                    <label >Logradouro:</label>
                    <input type="text" name="logradouro" id="form-logradouro"  required>
                </div><br>
                <div>
                    <label >Número:</label>
                    <input type="text" name="numero" id="form-numero"  required>
                </div><br>
                <div>
                    <label >Complemento:</label>
                    <input type="text" name="complemento" id="form-complemento"  required>
                </div><br>
                <div>
                    <label >Foto:</label>
                    <input type="file" name="foto" id="form-foto"  required>
                </div><br>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </body>

</html>