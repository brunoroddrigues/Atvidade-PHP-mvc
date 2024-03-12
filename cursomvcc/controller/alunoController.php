<?php
    require_once "models/conexao.php";
    require_once "models/aluno.php";
    require_once "models/alunoDAO.php";
    class alunoController 
    {
        public function Listar()
        {
            $alunoDAO = new alunoDAO();
            $retorno = $alunoDAO->Buscar_alunos();
            require_once "views/listarAlunos.php";
        }
        public function inserir()
        {
            $msg = array ("","","","","");
            $erro = false;
			if($_POST)
			{
				if(empty($_POST["nome"]))
				{
					$msg[0] = "Preencha o Aluno";
                    $erro = true;
				}
                if(empty($_POST["email"]))
				{
					$msg[1] = "Preencha o email";
                    $erro = true;
				}
                if(empty($_POST["telefone"]))
				{
					$msg[2] = "Preencha o Telefone";
                    $erro = true;
				}
                if(empty($_POST["senha"]))
				{
					$msg[3] = "Preencha a senha";
                    $erro = true;
				}
                if(empty($_POST["cpf"]))
				{
					$msg[4] = "Preencha o Cpf";
                    $erro = true;
				}
                if($erro === false)
				{
					//inserir no BD
					$aluno = new aluno(nome:$_POST["nome"],email:$_POST["email"],telefone:$_POST["telefone"],senha:$_POST["senha"],cpf:$_POST["cpf"]);
					$alunoDAO = new alunoDAO();
					$alunoDAO->cadastrar($aluno);
					header("location:index.php?controle=alunoController&metodo=listar");
				}
			}
			//mostrar uma visão
			require_once "Views/form_Aluno.php";
        }
		public function excluir()
		{
			if(isset($_GET["idaluno"]))
			{
				$aluno = new aluno($_GET["idaluno"]);
				$alunoDAO = new alunoDAO();
				$alunoDAO->excluir_aluno($aluno);
				header("location:index.php?controle=alunoController&metodo=listar");
			}
		}
		public function alterar()
		{
			$msg = array("", "", "", "");

			if($_POST) {
				if(empty($_POST["nome"])) {
					$msg[0] = "Nome do aluno obrigatório";
				}
				else if(empty($_POST["email"])){
					$msg[1] = "Email obrigatório";
				}
				else if(empty($_POST["telefone"])){
					$msg[2] = "Telefone obrigatório";
				}
				else if(empty($_POST["cpf"])){
					$msg[3] = "CPF obrigatório";
				}
				else {
					$aluno = new aluno($_POST["idaluno"], $_POST["nome"], $_POST["cpf"], $_POST["telefone"], $_POST["email"]);
					$alunoDAO = new alunoDAO();
					$alunoDAO->alterar_aluno($aluno);
					header("location:index.php?controle=alunoController&metodo=listar");
				}
			}

			if(isset($_GET["idaluno"])) {
				$aluno = new aluno($_GET["idaluno"]);
				$alunoDAO = new alunoDAO();
				$retorno = $alunoDAO->buscar_um_aluno($aluno);
				require_once "Views/edit_aluno.php";
			}
		}
    }
?>