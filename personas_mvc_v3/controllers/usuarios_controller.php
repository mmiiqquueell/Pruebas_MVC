<?php
require_once("models/usuarios_model.php");

class usuarios_controller
{

    function muestraLogin()
    {
        require_once("views/pantalla_login.phtml");
    }
    
    function iniciarSesion()
    {
        $usuarios=new usuarios_model();

        $datos=$usuarios->iniciarSesion();

        require_once("views/pantalla_login.phtml");
    }
    
    function cerrarSesion()
    {
        require_once("views/index.php");
    }
}