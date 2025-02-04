<?php
   namespace PHP\Modelo\DAO;
   require_once('Conexao.php');
   use PHP\Modelo\DAO\Conexao;

   class Excluir{
        function excluirCliente(Conexao $conexao,string $cpf){
            $conn = $conexao->conectar();
            $sql  = "delete from Cliente where codigo = '$cpf'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            if ($result){
                echo "<br>Excluido com sucesso!";
            }else{
                echo "<br>Não foi deletado";
            }  
        }         
        }//fim do método
?>
    
 
