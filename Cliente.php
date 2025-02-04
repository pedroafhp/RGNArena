<?php
    namespace PHP\Modelo;

    class Cliente{
        protected string $cpf;
        protected string $nome;
        protected string $dtaNascimento;
        protected string $telefone;
        protected string $email;
        protected string $endereco;
        protected string $genero;

        
        public function __construct(string $cpf,string $nome, string $dtaNascimento,string $telefone,string $email,string $endereco,string $genero)

         {//instanciar
            $this->cpf = $cpf; 
            $this->tipo = $nome;
            $this->nome = $dtaNascimento; 
            $this->telefone = $telefone; 
            $this->email = $email; 
            $this->endereco = $endereco;
            $this->genero = $genero;
        }//fim do construct

        public function __get(string $variavel):mixed
        {
            return $this-> variavel;
        }    

        public function __set(string $variavel,string $novoDado):void//nao retorna nada 
        {
            $this->variavel = $novoDado;
        }

        public function imprimir():string
        {
            return "<br><br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Data de Nascimento: ".$this->dtaNascimento.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Email: ".$this->email.
                   "<br>Endereço: ".$this->endereco.
                   "<br>Genero: ".$this->genero;
        }
    }//fim da classe pessoa
?>
