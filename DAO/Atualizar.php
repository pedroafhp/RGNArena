<?php
   namespace PHP\Modelo\DAO;
   require_once('Conexao.php');
   use PHP\Modelo\DAO\Conexao;

    class Atualizar{
        function atualizarCadastro(Conexao $conexao, string $campo, mixed $novoDado, string $cpf, float $tipo){
            $conn = $conexao->conectar();
            $sql  = "update Cliente set $campo = '$novoDado' where codigo = '$cpf'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            if ($result){
                echo "<br>Atualizar com sucesso!";
            }else{
                echo "<br>Não atualizado";
            }  
        }         
        }//fim do método
?>