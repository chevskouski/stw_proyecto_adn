<?php
class aduanaController extends Controller{
	
	public function __construct(){
		parent::__construct();
		$this->modelo=$this->loadModel('aduana','aduanas');
        $this->view->template = 'main';
	}
	
	public function index(){
		
	}

    public function datos_poliza(){

        $data = json_decode(file_get_contents('php://input'), true);
    
        if(!empty($data)){
            echo json_encode($this->procesarDatos($data));
        }else{
            return 'no hay datos';
        }
    
    }

    public function marcar_color($a_valor){
        if ($a_valor == 0){
            return "verde";
        }else{
            return "rojo";
        }
    }

    public function consultar_arancel(){
		$this->modelo->tabla = 'sys_producto';
        $params=array('operacion'=>'consultar_arancel');
        $resultado =$this->modelo->ejecutar_sql($params);
        $datos = $resultado['datos'];
        //var_dump($datos);
        return $datos;
    }


    //------------------------------------------------------------------------

    public function db_insert ($manifiesto_procesado_verde,$manifiesto_procesado_rojo){
    	$clave_verde = sizeof($manifiesto_procesado_verde)-1;
    	$clave_rojo = sizeof($manifiesto_procesado_rojo)-1;
    	for ($i=0; $i<=$clave_verde; $i++) {
            $params = array('operacion'=>'insert_poliza_encabezado','datos'=> array('no_orden' =>$manifiesto_procesado_verde[$i]["no_orden"],'id_manifiesto' =>$manifiesto_procesado_verde[$i]["id_manifiesto"],'descripcion'=>$manifiesto_procesado_verde[$i]["nombre_comprador"])); //esto insetara los datos del manifiesto con color verde en un sql
            $resultado = $this->modelo->ejecutar_sql($params);
            $params = array('operacion'=>'insertar_poliza_detalle','datos'=>array('id_poliza_encabezado' =>$manifiesto_procesado_verde[$i]["id_manifiesto"],'tipo_producto' =>$manifiesto_procesado_verde[$i]["tipo_producto"],'descripcion'=>$manifiesto_procesado_verde[$i]["descripcion_producto"],'precio'=>$manifiesto_procesado_verde[$i]["valor_producto"],'porcentaje'=>$manifiesto_procesado_verde[$i]["porcentaje_arancel"],'color'=>"v" ));//esto insetara los datos del manifiesto con color verde en un sql
            $resultado = $this->modelo->ejecutar_sql($params);
		}
		for ($i=0; $i<=$clave_rojo; $i++) {
    	$params = array('operacion'=>'insert_poliza_encabezado','datos'=>array('no_orden' =>$manifiesto_procesado_rojo[$i]["no_orden"],'id_manifiesto' =>$manifiesto_procesado_rojo[$i]["id_manifiesto"],'descripcion'=>$manifiesto_procesado_rojo[$i]["nombre_comprador"]));//esto insetara los datos del manifiesto con color rojo en un sql
    	$resultado = $this->modelo->ejecutar_sql($params);
    	$params = array('operacion'=>'insertar_poliza_detalle','datos'=>array('id_poliza_encabezado' =>$manifiesto_procesado_rojo[$i]["id_manifiesto"],'tipo_producto' =>$manifiesto_procesado_rojo[$i]["tipo_producto"],'descripcion'=>$manifiesto_procesado_rojo[$i]["descripcion_producto"],'precio'=>$manifiesto_procesado_rojo[$i]["valor_producto"],'porcentaje'=> $manifiesto_procesado_rojo[$i]["porcentaje_arancel"], 'color'=>"r" ));//esto insetara los datos del manifiesto con color rojo en un sql
    	$resultado = $this->modelo->ejecutar_sql($params);
    	
		}

		//var_dump($resultado);
    }

    //------------------------------------------------------------------------


    public function procesarDatos($data){
        $poliza = new polizaController();
        $correo = new correoController();

        //Procesamiento de los datos
        $resultado = $data;
        $arancel = $this->consultar_arancel();
        $manifiesto_procesado_verde = array();// Array que contendra la informacion ya procesada
        $manifiesto_procesado_rojo = array();// Array que contendra la informacion ya procesada

        $t_array = sizeof($arancel);

        $no_orden = strtotime("now");

        foreach($resultado as $clave => $item){

            $procentaje_arancel = 0.00;

            for ($x = 0; $x < $t_array; $x++) {
                if (strtolower($arancel[$x]["descripcion"]) == strtolower($resultado[$clave]["tipo_producto"])){//cambiar "cpu" por ]
                    $procentaje_arancel = $arancel[$x]["porcentaje_arancel"];
                    break;
                }
            }


            $color = $this->marcar_color(rand(0,1)); // Se asgina un color aleatorio al paquete

            
            if($color == "verde"){

                $manifiesto_procesado_verde[$clave]["id_manifiesto"] = $resultado[$clave]["id_manifiesto"];
                $manifiesto_procesado_verde[$clave]["id_detalle"] = $resultado[$clave]["id_detalle"];
                $manifiesto_procesado_verde[$clave]["nombre_comprador"] = $resultado[$clave]["nombre_comprador"];
                $manifiesto_procesado_verde[$clave]["descripcion_producto"] = $resultado[$clave]["descripcion_producto"];
                $manifiesto_procesado_verde[$clave]["valor_producto"] = floatval($resultado[$clave]["valor_producto"]);
                $manifiesto_procesado_verde[$clave]["no_orden"] = $no_orden;
                $manifiesto_procesado_verde[$clave]["porcentaje_arancel"] = floatval($procentaje_arancel);
                $manifiesto_procesado_verde[$clave]["color_paquete"] = $color;
                $manifiesto_procesado_verde[$clave]["tipo_producto"] = $resultado[$clave]["tipo_producto"];

            }else{
                $manifiesto_procesado_rojo[$clave]["id_manifiesto"] = $resultado[$clave]["id_manifiesto"];
                $manifiesto_procesado_rojo[$clave]["id_detalle"] = $resultado[$clave]["id_detalle"];
                $manifiesto_procesado_rojo[$clave]["nombre_comprador"] = $resultado[$clave]["nombre_comprador"];
                $manifiesto_procesado_rojo[$clave]["descripcion_producto"] = $resultado[$clave]["descripcion_producto"];
                $manifiesto_procesado_rojo[$clave]["valor_producto"] = floatval($resultado[$clave]["valor_producto"]);
                $manifiesto_procesado_rojo[$clave]["no_orden"] = $no_orden;
                $manifiesto_procesado_rojo[$clave]["porcentaje_arancel"] = floatval($procentaje_arancel);
                $manifiesto_procesado_rojo[$clave]["color_paquete"] = $color;
                $manifiesto_procesado_rojo[$clave]["tipo_producto"] = $resultado[$clave]["tipo_producto"];
            }
            //Se agrega la info al nuevo array
            
        }
    
        $respuesta_correo = '';

        if(!empty($manifiesto_procesado_verde)){
            $poliza->generar_poliza(array_values($manifiesto_procesado_verde),'[VERDE]');
        }
        if(!empty($manifiesto_procesado_rojo)){
            $poliza->generar_poliza(array_values($manifiesto_procesado_rojo),'[ROJO]');
        }
        if(!empty($manifiesto_procesado_verde) || !empty($manifiesto_procesado_rojo)){
            $correo->enviar_correo($no_orden);
            $this->db_insert(array_values($manifiesto_procesado_verde),array_values($manifiesto_procesado_rojo));
        }
        
        return 'Datos Recibidos y Procesados con Exito, Su Manifiesto es: '.$no_orden.'\n'.$respuesta_correo;
    }
}

$procesard = new aduanaController();
return $procesard->datos_poliza();

?>