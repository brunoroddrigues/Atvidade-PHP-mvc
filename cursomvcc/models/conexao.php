<?php
	class Conexao  // aqui vou colocar o nome do banco 
	{
		public function __construct(protected $db = null)
		{
			
			$parametros = "mysql:host=localhost;dbname=cursomvcc;charset=utf8mb4";
			
			$this->db = new PDO($parametros, "root", "");
			
		}
	}//fim da classe
?>