<?php
    class aluno
    {
        public function __construct(private string $idaluno = "", private string $nome = "", private string $cpf = "", 
        private string $telefone = "",private string $email = "", private string $senha = "", private array $curso = array()){}

        public function getIdaluno()
        {
            return $this->idaluno;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getCpf()
        {
            return $this->cpf;
        }
        public function getTelefone()
        {
            return $this->telefone;
        }
        public function getEmail()
        {
            return $this->email;
        }
        public function getSenha()
        {
            return $this->senha;
        }
        public function getCurso()
        {
            return $this->curso;
        }




        public function setIdaluno($idaluno)
        {
            $this->idaluno = $idaluno;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setSenha($senha)
        {
            $this->senha = $senha;
        }
        public function setCurso($curso)
        {
            $this->curso[] = $curso;
        }
    }
?>