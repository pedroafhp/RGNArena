<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">  
    <title>Atualizar Cliente</title>
</head>
<body>
    <a href="Menu.php"> <button>Voltar</button></a>
    <form method="POST">
        <label>Informe um CPF: </label>
        <input type = "text" name="tCpf"/><br><br>

        <div class="mb-3">
            <label for="lTipo" class="form-label">Selecione 1- Funcionario:</label>
            <select class="form-select" id="tTipo" name="tTipo" required>
                <option value="1">1 - Cliente</option>
            </select>
        </div> 

        <label>Informe sua atualização: </label>
        <select name="tCampo">
            <option value="tipo">Tipo</option>
            <option value="nome">Nome</option>
            <option value="dtaNascimento">Data de Nascimento</option>
            <option value="telefone">Telefone</option>
            <option value="email">Email</option>
            <option value="endereco">Endereço</option>
            <option value="genero">Genero</option>
        </select><br><br>

        <label>Novo Dado: </label>
        <input type = "text" name="tNovoDado"/><br><br>

        <button type="submit">Atualizar
            <?php
                $conexao = new Conexao();
                if(isset($_POST['tCpf']) && isset($_POST['tTipo'])){
                $atualizar = new Atualizar();
                    $cpf =$_POST['tCpf'];
                    $tipo = $_POST['tTipo'];
                    $campo =$_POST['tCampo'];
                    $novoDado =$_POST['tNovoDado'];
                }  
            ?>
          </button>
    </form>
    <?php
        if(isset($_POST['tCpf'])){
            echo $atualizar->atualizarFuncionario($conexao,$campo,$novoDado,$cpf,$tipo);
        }else{
            echo "Preencha os campos vazios!";
        }
    ?>
</body>
</html>