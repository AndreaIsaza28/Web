<?php
    require_once("../Modelo.php");
	
    class personas extends Modelo {
		public $ID;
		public $USUARIO;
		public $CLAVE;
		public $ID_ROL;
		public $DESCRIPCION_ROL;
		
		public function consultar($ID='') {
			if($ID !=''):
				$this->query = "
				SELECT ID, USUARIO, CLAVE,ID_ROL
				FROM personas
				WHERE ID = '$ID' order by ID
				";
				$this->obtener_resultados_query();
			endif;
			if(count($this->rows) == 1):
				foreach ($this->rows[0] as $propiedad=>$valor):
					$this->$propiedad = $valor;
				endforeach;
			endif;
		}
		
		public function lista() {
			$this->query = "
			SELECT ID, USUARIO, CLAVE, ID_ROL FROM personas order by ID";
			$this->obtener_resultados_query();
			return $this->rows;
		}
		
		public function nuevo($datos=array()) {
			if(array_key_exists('ID', $datos)):
				foreach ($datos as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
					INSERT INTO personas
					(ID, USUARIO, CLAVE, ID_ROL)
					VALUES
					('$ID', '$USUARIO', '$CLAVE', '$ID_ROL')
					";
				$this->ejecutar_query_simple();
			endif;
		}
		
		public function editar($datos=array()) {
			foreach ($datos as $campo=>$valor):
				$$campo = $valor;
			endforeach;
			$this->query = "
			UPDATE personas
			SET USUARIO='$USUARIO',
			CLAVE='$CLAVE',
			ID_ROL='$ID_ROL'
			WHERE ID = '$ID'
			";
			$this->ejecutar_query_simple();
		}
		
		public function borrar($ID='') {
			$this->query = "
			DELETE FROM personas
			WHERE ID = '$ID'
			";
			$this->ejecutar_query_simple();
		}
	}
?>