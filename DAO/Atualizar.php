<?php
   namespace PHP\Modelo\DAO;
   require_once('Conexao.php');
   use PHP\Modelo\DAO\Conexao;

    class Atualizar{
        function atualizarCadastro(Conexao $conexao, string $campo, string $novoDado, string $cpf, float $tipo){
            $conn = $conexao->conectar();
            $sql  = "update Funcionario set $campo = '$novoDado' where codigo = '$cpf' and tipo =' $tipo' ";
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