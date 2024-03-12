<?php
	class cursoDAO extends Conexao
	{
		public function __construct()
		{
			parent:: __construct();
		}
		public function buscar_cursos()
		{
			$sql = "SELECT * FROM curso";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				echo "Problema ao buscar todos os cursos";
			}
		}//fim buscar_cursos
		public function cadastrar($curso)
		{
			$sql = "INSERT INTO curso (nome) VALUES(?)";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getNome());
				$stm->execute();
				$this->db = null;
				return "Curso Inserido com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				echo "Problema ao inserir curso";
			}
			
		}
		public function excluir_curso($curso)
		{
			$sql = "DELETE FROM curso WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getIdcurso());
				$stm->execute();
				$this->db = null;
				return "Curso excluido";
			}
			catch(PDOException $e)
			{
				$this->db = null;
				return "Problema ao excluir um curso";
			}
		}
		public function buscar_um_curso($curso)
		{
			$sql = "SELECT * FROM curso WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getIdcurso());
				$stm->execute();
				$this->db = null;
				return $stm->fetchAll(PDO::FETCH_OBJ);
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				echo "Problema ao buscar um curso";
			}
		}
		public function alterar_curso($curso)
		{
			$sql = "UPDATE curso SET nome = ? WHERE idcurso = ?";
			try
			{
				$stm = $this->db->prepare($sql);
				$stm->bindValue(1, $curso->getNome());
				$stm->bindValue(2, $curso->getIdcurso());
				$stm->execute();
				$this->db = null;
				return "Curso Alterdo com sucesso";
			}
			catch(PDOException $e)
			{
				echo $e->getCode();
				echo $e->getMessage();
				echo "Problema ao alterar um curso";
			}
		}
	}//fim da classe
?>