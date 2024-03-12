<?php
    class alunoDAO extends conexao
    {
       public function __construct() 
       {
           parent:: __construct();
       }

       public function Buscar_alunos()
       {
            $sql =  "select * FROM aluno";
            try // tentar
            {
                $stm = $this->db->prepare($sql);
                $stm->execute();
                $this->db = null;
                return $stm->fetchALL(PDO::FETCH_OBJ); 
            }
            catch(PDOException $e) 
            {
                echo $e->getCode();
                echo $e->getMessage();
                echo "Problema ao buscar todos os alunos";   
            }   
       }
       public function cadastrar($aluno)
       {
           $sql = "INSERT INTO aluno (nome,email,telefone,senha,cpf) VALUES(?,?,?,?,?)";
           try
           {
               $stm = $this->db->prepare($sql);
               $stm->bindValue(1, $aluno->getNome());
               $stm->bindValue(2, $aluno->getEmail());
               $stm->bindValue(3, $aluno->getTelefone());
               $stm->bindValue(4, $aluno->getSenha());
               $stm->bindValue(5, $aluno->getCpf());
               $stm->execute();
               $this->db = null;
               return "Aluno Inserido com sucesso";
           }
           catch(PDOException $e)
           {
               echo $e->getCode();
               echo $e->getMessage();
               echo "Problema ao inserir curso";
           }
       }
       public function excluir_aluno($aluno)
		{
			$sql = "DELETE FROM aluno WHERE idaluno = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $aluno->getIdaluno());
				$stm->execute();
				$this->db = null;
				return "Aluno excluido";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao excluir um Aluno";
			}
		}

        public function buscar_um_aluno($aluno) {
            $sql = "SELECT * FROM aluno WHERE idaluno = ?";

            try {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $aluno->getIdaluno());
                $stm->execute();
                $this->db = null;
                return $stm->fetchAll(PDO::FETCH_OBJ);
            } 
            catch(PDOException $e) {
                echo $e->getCode();
                echo $e->getMessage();
                echo 'Problema ao buscar um aluno';
            }
        }

        public function alterar_aluno($aluno) {
            $sql = "UPDATE aluno SET nome = ?, cpf = ?, telefone = ?, email = ? WHERE idaluno = ?";
            try {
                $stm = $this->db->prepare($sql);
                $stm->bindValue(1, $aluno->getNome());
                $stm->bindValue(2, $aluno->getCpf());
                $stm->bindValue(3, $aluno->getTelefone());
                $stm->bindValue(4, $aluno->getEmail());
                $stm->bindValue(5, $aluno->getIdaluno());
                $stm->execute();
                $this->db = null;
                return "Aluno alterado com sucesso";
            }
            catch(PDOException $e) {
                echo $e->getCode();
                echo $e->getMessage();
                echo "Problema ao alterar um aluno";
            }
        }
    }
?>