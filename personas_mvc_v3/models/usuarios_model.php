<?php

class usuarios_model
{
    public function iniciarSesion()
    {
        session_start();
        // $nombre = $_POST['usuario'];
        //$password = $_POST['password'];
        $sql = "SELECT * FROM usuarios WHERE user = '$nombre'";
        // $resultado = $conectado->query($sql);
		if ($resultado->num_rows > 0) {
			$row = $resultado->fetch_assoc();
			
			if(($nombre == $row['user']) && ($passwd == $row['pass'])) {
				header("Location: index.php");
			}
			else {
				header("Location: index.php");
			}
		} else {
			header("Location: index.php");
		}

    }
    
    public function cerrarSesion()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php");
    }
    
    public function muestraLogin()
    {
        header("Location: index.php");
    }
}
