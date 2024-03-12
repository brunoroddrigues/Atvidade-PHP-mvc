<?php
	require_once "Models/Conexao.php";
	require_once "Models/cursoDAO.php";
	require_once "Models/Curso.php";
	class cursoController
	{
		public function listar()
		{
			//buscar os cursos na base de dados
			$cursoDAO = new cursoDAO();
			$retorno = $cursoDAO->buscar_cursos();
			/*echo "<pre>";
			var_dump($retorno);
			echo "</pre>";*/
			//chamar a visão que mostrará ao usuários os cursos cadastrados
			require_once "Views/listarCursos.php";
			
		}//fim listar
		public function inserir()
		{
			$msg = "";
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg = "Preencha o curso";
				}
				else
				{
					//inserir no BD
					$curso = new Curso(nome:$_POST["nome"]);
					$cursoDAO = new cursoDAO();
					$cursoDAO->cadastrar($curso);
					header("location:index.php?controle=cursoController&metodo=listar");
				}
			}
			//mostrar uma visão
			require_once "Views/form_Curso.php";
		}
		public function alterar()
		{
			$msg = "";
			
			//alterar BD
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg = "Nome do curso obrigatório";
				}
				else
				{
					$curso = new Curso($_POST["idcurso"], $_POST["nome"]);
					$cursoDAO = new cursoDAO();
					$cursoDAO->alterar_curso($curso);
					header("location:index.php?controle=cursoController&metodo=listar");
				}
			}//fim do post
			//buscar curso BD
			if(isset($_GET["idcurso"]))
			{
				$curso = new Curso($_GET["idcurso"]);
				$cursoDAO = new cursoDAO();
				$retorno = $cursoDAO->buscar_um_curso($curso);
				//view edit_curso
				require_once "Views/edit_curso.php";
			}
		}//fim do alterar
		
		public function excluir()
		{
			if(isset($_GET["idcurso"]))
			{
				$curso = new Curso($_GET["idcurso"]);
				$cursoDAO = new cursoDAO();
				$cursoDAO->excluir_curso($curso);
				header("location:index.php?controle=cursoController&metodo=listar");
			}
		}
	}//fim classe
?>