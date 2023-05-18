<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class correoController extends Controller{
	
	public function __construct(){
		parent::__construct();
		$this->modelo=$this->loadModel('correo','correos');
		$this->view->template = 'main';
	}
	
	public function index(){
		
	}
	
	public function enviar_correo($attachment){
		
		$mail = $this->registry->mail;
		
		$mail = new PHPMailer(true);
		
		try {
			
		    $mail->SMTPOptions = array(
		    	'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    ));
		    $mail->SMTPDebug = 0;                      
		    $mail->isSMTP();                                            
		    $mail->Host       = 'host_url';                     
		    $mail->SMTPAuth   = true;                                   
		    $mail->Username   = 'user_mail';                    
		    $mail->Password   = 'password_mail';                              
		    $mail->SMTPSecure = $mail::ENCRYPTION_SMTPS;
    		$mail->Port       = 465;            
			
		    $mail->setFrom('sender_mail', 'username');
		    $mail->addAddress('recipient_mail'); 

		    $mail->isHTML(true);                              
		    $mail->Subject = 'Poliza';
		    $mail->Body    = 'Mensaje automatico con archivo pdf adjunto de poliza.';
		    $mail->AltBody = 'Mensjae automatico con archivo pdf adjunto de poliza.';
			$mail->CharSet = 'UTF-8';
			$mail->AddAttachment('application/modules/aduanas/poliza/reportes/' . $attachment.'[VERDE].pdf', $attachment.'[VERDE].pdf');
			$mail->AddAttachment('application/modules/aduanas/poliza/reportes/' . $attachment.'[ROJO].pdf', $attachment.'[ROJO].pdf');
		    $mail->send();
		    echo 'Se ha enviado correctamente el correo';
		    
		} catch (Exception $e) {
			$error = $mail->ErrorInfo;
			echo '"No se ha podido mandar el correo. Mailer Error: ' . $error . '"';
		}			
	}
}
?>