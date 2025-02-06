<?php
   namespace PHP\Modelo\DAO;
   require_once('Conexao.php');
   require_once('Consultar.php');
   use PHP\Modelo\DAO\Conexao;
   use PHP\Modelo\DAO\Consultar;

   class Excluir{
        function excluirCliente(Conexao $conexao,string $cpf){
            $conn = $conexao->conectar();
            $consultar = new Consultar();
            $logico = $consultar->consultarCPF($conexao, $cpf);

            if($logico == true){
                $sql  = "delete from Cliente where codigo = '$cpf'";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                if ($result){
                    echo "Excluido com sucesso!";
                }else{
                    echo "Não foi deletado";
                }  
            }else{
                echo "Digite um CPF válido!";
            }
        }         
        }//fim do método
?>
    
 
