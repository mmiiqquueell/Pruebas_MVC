<?php
//Llamada al modelo
require_once("models/personas_model.php");


class personas_controller
{

/**
 * Muestra pantalla 'add'
 * @return No
 */
    function add()
    {
        require_once("views/personas_add.phtml");
    }


/**
 * Mostra llistat
 * @return No
 */
    function view()
    {
        $persona=new personas_model();

        //Uso metodo del modelo de personas
        $datos=$persona->get_personas();

        //Llamado a la vista: mostrar la pantalla
        require_once("views/personas_view.phtml");
    }
    
    /**
 * Mostra llistat ordenada per nom
 * @return No
 */
    function ordenar_nombre()
    {
        $persona=new personas_model();

        //Uso metodo del modelo de personas
        $datos=$persona->ordenar_nombre();

        //Llamado a la vista: mostrar la pantalla
        require_once("views/personas_view.phtml");
    }
    
    /**
 * Mostra llistat ordenada per edad
 * @return No
 */
    function ordenar_edad()
    {
        $persona=new personas_model();

        //Uso metodo del modelo de personas
        $datos=$persona->ordenar_edad();

        //Llamado a la vista: mostrar la pantalla
        require_once("views/personas_view.phtml");
    }


/**
 * Inserta a la taula
 * @return No
 */
    function insert()
    {
        $persona=new personas_model();

        if (isset($_POST['insert'])) {
            $persona->setNombre($_POST['nombre']);
            $persona->setEdad($_POST['edad']);

            $error = $persona->insertar();

            if (!$error) {
                header("Location: index.php");
            } else {
                echo $error;
            }
        }
    }


/**
 * Elimina una fila de la taula
 * @return No
 */
    function delete()
    {
        if (isset($_GET['id'])) {
            $persona=new personas_model();

            $id = $_GET['id'];

            $error = $persona->delete($id);

            if (!$error) {
                header("Location: index.php");
            } else {
                echo $error;
            }
        }
    }
}
