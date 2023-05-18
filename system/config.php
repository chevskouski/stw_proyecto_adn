<?php
    
if($_SERVER['HTTP_HOST']=='localhost'){
    define('HOST', 'localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB_NAME','db_uspgcoders');
    define('BASE_URL','http://localhost/stw_proyecto_adn/');
}else{
    define('BASE_URL','url_base');
    define('HOST', 'localhost');
    define('USER','username');
    define('PASSWORD','password');
    define('DB_NAME','database_name');   
}
?>