<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;  

    class Inserir{
        //INICIO FUNCIONÁRIO
        function cadastrarCliente(Conexao $conexao,
                                        string $cpf,
                                        string $nome,
                                        string $dtaNascimento,
                                        string $telefone,
                                        string $email,
                                        string $endereco,
                                        string $genero
         ){
            try{
                $conn = $conexao->conectar();//Abrir banco
                $sql = "Insert into cliente(codigo,nome, dtaNascimento, telefone, email, endereco, genero) values('$cpf','$nome','$dtaNascimento','$telefone','$email','$endereco','$genero')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
         }//fim do método
    }//fim da classe
?>