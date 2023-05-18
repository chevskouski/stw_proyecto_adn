<?php
class aduanaModel extends Model{
	function __construct() {
		parent::__construct();
		$this->tabla='sys_producto';
	}
	
	function generar_sql($parametros){
		if($parametros['operacion'] == 'consultar_arancel'){
			$sql = "select * from ";
			$sql .= $this->tabla;

			return $sql;
		}

		//------------------------------------------------------------
		//var_dump($parametros);
		elseif($parametros['operacion'] == 'insert_poliza_encabezado'){
			$sql ="insert into sys_poliza_encabezado(no_orden, id_manifiesto, descripcion)";
			$sql .=" values(";
			$sql .=$parametros['datos']['no_orden'];
			$sql .= ",";
			$sql .=$parametros['datos']['id_manifiesto'];
			$sql .= ",'";
			$sql .=$parametros['datos']['descripcion'];
			$sql .="');";

			return $sql;
		}

		//echo $sql;

		elseif($parametros['operacion'] == 'insertar_poliza_detalle'){
			//var_dump($parametros);
			$sql ="insert into sys_poliza_detalle(id_poliza_encabezado, tipo_producto, descripcion, precio, porcentaje, color)";
			$sql .= " values(";
			$sql .=$parametros['datos']['id_poliza_encabezado'];
			$sql .= ",'";
			$sql .=$parametros['datos']['tipo_producto'];
			$sql .= "','";
			$sql .=$parametros['datos']['descripcion'];
			$sql .= "',";
			$sql .=$parametros['datos']['precio'];
			$sql .= ",";
			$sql .=$parametros['datos']['porcentaje'];
			$sql .= ",'";
			$sql .=$parametros['datos']['color'];
			$sql .="')";
			//echo $sql;
			return $sql;
		}

		//------------------------------------------------------------
			
	}
}
?>