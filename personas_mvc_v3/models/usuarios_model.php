<?php

class usuarios_model
{

    public function __construct(){
        $this -> db = Conectar::conexion();
    }
    
    public function getNombre() {
      return $this -> nombre;
    }

    public function setNombre($nombre) {
      $this -> nombre = $nombre;
    }


    public function getPassword() {
      return $this -> password;
    }

    public function setPassword($password) {
      $this -> password = $password;
    }
    
    
    
    function login()
    {
        $sql = "SELECT * FROM usuarios WHERE nombre = '{$this -> nombre}' AND password = '{$this -> password}';";
		$resultado = $this -> db -> query($sql);
		if ($resultado -> num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
    
    function logout()
    {
      
    }
    
   
}
