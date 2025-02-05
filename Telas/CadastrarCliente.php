<?php
    namespace PHP\Modelo\Telas;
    require_once('..\Cliente.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
?>
 
<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <a href="Index.php"> <button>Voltar</button></a>

    <form method="POST">
    <div class="mb-3">
        <label for="lCpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="000.000.000-00">
    </div>
    <div class="mb-3">
        <label for="lNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu nome">
    </div>    
    <div class="mb-3">
        <label for="lDtaNascimento" class="form-label">Data de Nascimento</label>
        <input type="text" class="form-control" id="tDtaNascimento" name="tDtaNascimento" placeholder="Insira sua data de nascimento">
    </div>
    <div class="mb-3">
        <label for="lTelefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(xx) xxxxx-xxxx">
    </div>
    <div class="mb-3">
    <label for="lEmail" class="form-label">Email</label>
    <input type="text" class="form-control" id="tEmail" name= "tEmail" placeholder="usuario@gmail.com">
    </div>
    <div class="mb-3">
        <label for="lEndereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="tEndereco" name="tEndereco" placeholder="Avenida Senador Vergueiro, 400">
    </div>
    <div class="mb-3">
        <label for="lGenero" class="form-label">Genero</label>
        <input type="text" class="form-control" id="tGenero" name="tGenero" placeholder="Homem ou Mulher">
    </div>
 
    <button type="submit">Cadastrar
        <?php
            $conexao = new Conexao();//conectar no banco

            if(isset($_POST['tCpf']) ){
                $cpf = $_POST['tCpf'];
                $nome = $_POST['tNome'];
                $dtaNascimento = $_POST['tDtaNascimento'];
                $telefone = $_POST['tTelefone'];
                $email = $_POST['tEmail'];
                $endereco = $_POST['tEndereco'];
                $genero = $_POST['tGenero'];
            //Instaciar
            $inserir = new Inserir();
            echo $inserir->cadastrarCliente($conexao,$cpf,$nome,$dtaNascimento,$telefone,$email,$endereco,$genero);
         }
        ?>
    </button>
    </form>
</body>
</html>
 