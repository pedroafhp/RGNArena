<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarClienteIndividual(Conexao $conexao,string $cpf)        
       {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from Cliente where codigo = '$cpf'";
                $result = mysqli_query($conn,$sql);
                while($dados = mysqli_fetch_Array($result))
                {
                    if($dados['codigo'] == $cpf){
                        return "<br>cpf: ".$dados['codigo'].
                            "<br>Nome: ".$dados['nome'].
                            "<br>Data de Nascimento: ".$dados['dtaNascimento'].
                            "<br>Telefone: ".$dados['telefone'].
                            "<br>Endereço: ".$dados['endereco'].
                            "<br>Email: ".$dados['email'].
                            "<br>Genero: ".dados['genero'];
                    }
                }
                return "Digite um CPF válido!";
            }catch(Exception $erro)
            {
                echo $erro;
            }
    }//fim do método
    }//fim da classe
?>