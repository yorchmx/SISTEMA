<?php

class ControladorEmpleados{

    public function inicio(){

        include_once("vista/empleados/inicio.php");

    }

    public function crear(){

        if($_POST){
            print_r($_POST);
        }

        include_once("vista/empleados/crear.php");

    }

    public function editar(){

        include_once("vista/empleados/editar.php");

    }
}


?>