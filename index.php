<?php
require_once 'config/database.php';
require_once 'models/UsuarioModel.php';
require_once 'controllers/BancoController.php';

$accion = isset($_GET['accion']) ? $_GET['accion'] : 'inicio';

$controlador = new BancoController();

switch ($accion) {
    case 'login':
        $controlador->login();
        break;
    case 'retiro':
        $controlador->retiro();
        break;
 
    case 'listar':
        $controlador->listarUsuarios();
        break;
    case 'auditoria':
        $controlador->auditoria();
        break;
        
    default:
        echo "Bienvenido al Sistema Bancario . <br>";
        echo "Prueba en la URL con: ?accion=login&u=admin&p=1234";
        break;
}
?>