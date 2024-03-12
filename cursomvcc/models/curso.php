<?php
    class curso
    {
        public function __construct(private string $idcurso = "", private string $nome = "", private array $aluno = array()){}

        

        public function getIdcurso() 
        {
            return $this->idcurso;
        }
        public function getNome()
        {
            return $this->nome;
        }
        public function getAluno()
        {
            return $this->aluno;
        }





        public function setIdcurso($idcurso)
        {
            $this->idcurso = $idcurso;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        public function setAluno()
        {
            $this->aluno[] = $aluno;
        }
    }
?>