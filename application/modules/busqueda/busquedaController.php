<?php
class busquedaController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->modelo = $this->loadModel('busqueda', 'aduanas');
        $this->view->template = 'main';
    }

    public function index()
    {
    }

    public function pagar_poliza()
    {
        // Incluimos la conexión a base de datos
        // Host en el server
        $connection = mysqli_connect(
            'localhost', 'user', 'password', 'dbname'
          );
          
        // iniciamos el curl
        $ch = curl_init();
        // indicamos que va a ser un get y la url
        curl_setopt($ch, CURLOPT_URL, 'https://www.loremipsum.syswebgroup.online/conexion.php');
        // decimos que en lugar de mostrarlo en pantalla que lo retorne
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Nomas para que no joda con el SSL en el localhost del WAMP >:v
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // lo guardamos en una variable (json)
        $response = curl_exec($ch);
        // por si muestra errores
        if (curl_errno($ch)) echo curl_error($ch);
        // por si no hay errores
        // convertimos el json en un array asociativo
        else $decoded = json_decode($response, true);
        //asigmanos un array para guardar los datos que vamos a presentar en pantalla
        $resultArray = array();
        //asignamos variable para ver el status del resultado Exito o Error
        $statusResult = '';
        //recorremos el array
        foreach ($decoded as $item) {
            //comprobamos el associative array para ver si el estado de pago ya está pagado o no
            // asignamos un query especifico para ver si está pagado o no
            if ($item['estado_pago'] == 'S') {
                $query = "update sys_poliza_detalle set pagado = 'S' where id_poliza_encabezado = '" . $item['id_poliza'] . "'"; //de momento se actualiza el detalle pero tmbn puede ser el encabezado
            } else {
                $query = "update sys_poliza_detalle set pagado = 'N' where id_poliza_encabezado = '" . $item['id_poliza'] . "'";
            }
            //ejecutamos el query creado
            $result = mysqli_query($connection, $query);
            // por si hay errores
            if (!$result) {
                die('Query Failed.');
            }
            // por si no hay errores
            $statusResult = 'Actualizado con Exito';
            $resultArray[] = array(
                'id_poliza' => $item['id_poliza'],
                'respuesta_update' => $statusResult
            );
        }
        //imprimimos el json
        echo json_encode($resultArray);
        // cerramos el curl
        curl_close($ch);
    }
}
$busquedaPoliza = new busquedaController();
$busquedaPoliza->pagar_poliza();
