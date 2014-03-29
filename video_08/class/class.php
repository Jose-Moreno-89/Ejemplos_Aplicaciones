<?php
	class Conectar{
		public static function con(){
			$conexion=mysql_connect("localhost","root","");
			mysql_query("SET NAMES 'utf8'");
			mysql_select_db("curso_php_poo");
			return $conexion;
		}
	}
//**************************************************
	class Trabajo{
		private $vicitas;

		public function __construct(){
			$this->visitas=array();
		}

		public function listar_visitas(){
			$sql="SELECT * FROM libro_de_visitas ORDER BY id DESC";
			$res=mysql_query($sql,Conectar::con());

			while ( $reg= mysql_fetch_assoc($res)) {
				$this->visitas[]=$reg;
			}
			return $this->visitas;
		}
		
		public function ins_visitas($nom,$tex){
			$sql="INSERT INTO libro_de_visitas VALUES (null,'$nom','$tex',now(),now()) ";
			$res=mysql_query($sql,Conectar::con());
			echo "<script >
				alert ('Gracias por escribir en el libro de visitas');
				window.location='index.php';
			</script>";
		}
	}
?>