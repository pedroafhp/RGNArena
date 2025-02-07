<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">  
    <title>Consultar Cliente</title>
</head>
<body>
    <form method="POST">
        <label>Informe um CPF: </label>
        <input type = "text" name="tCpf"/>
        <button type="submit">Consultar
            <?php
                $conexao = new Conexao();
                if(isset($_POST['tCpf'])){
                    $cpf = $_POST['tCpf'];
                    $consultar = new Consultar();
                }  
            ?>
        </button>
</form>
     <?php
        if(isset($_POST['tCpf'])){
        echo $consultar->consultarClienteIndividual($conexao,$cpf);
        }else{
            echo "";
        }
    ?>
</body><br><br>
<a href="Index.php"> <button>Voltar</button></a> 
</html>