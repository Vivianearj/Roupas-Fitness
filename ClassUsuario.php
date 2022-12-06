<?php
                                                      //metodo construtor onde o get retorna algo e o set manipula o atributo
    class ClassUsuario{
        private $nome;
        private $email;
        private $cpf;
        private $telefone;
        private $endereco;
        private $bairro;
        private $cep;
        private $estado;
        private $senha;

        function getNome(){
            return $this->nome;
        }

        function getEmail(){
            return $this->email;
        }

        function getCpf(){
            return $this->cpf;
        }

        function getTelefone(){
            return $this->telefone;
        }

        function getEndereco(){
            return $this->endereco;
        }

        function getBairro(){
            return $this->bairro;
        }

        function getCep(){
            return $this->cep;
        }

        function getEstado(){
            return $this->estado;
        }

        function getSenha(){
            return $this->senha;
        }

        function setNome($nome){
            $this->nome=$nome;
        }

        function setEmail($email){
            $this->email=$email;
        }

        function setCpf($cpf){
            $this->cpf=$cpf;
        }

        function setTelefone($telefone){
            $this->telefone=$telefone;
        }

        function setEndereco($endereco){
            $this->endereco=$endereco;
        }

        function setBairro($bairro){
            $this->bairro=$bairro;
        }

        function setCep($cep){
            $this->cep=$cep;
        }

        function setEstado($estado){
            $this->estado=$estado;
        }

        function setSenha($senha){
            $this->senha=$senha;
        }

    }

?>