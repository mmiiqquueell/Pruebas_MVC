<?php
require_once("models/usuarios_model.php");

class usuarios_controller
{

    function muestraLogin()
    {
        require_once("views/pantalla_login.phtml");
    }
    
    public function login()
    {
        $nombre = $_POST['nombre'];
		$password = $_POST['password'];
        
        $new_user = new usuarios_model();  
        
        $new_user -> setNombre($nombre);
        $new_user -> setPassword($password);
        
        $usuarioExiste = $new_user -> login();
        
        if($usuarioExiste) {
        header ("Location: index.php?controller=personas&action=view");
        } else {header ("Location: index.php");}
    }
    
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header ("Location: index.php");
    }
    
}
