<?php
include_once("modelos/empleado.php");
include_once("conexion.php");

BD::crearInstancia();

class ControladorEmpleados{

    public function inicio(){

        $empleados=Empleado::consultar();
        
        

        include_once("vista/empleados/inicio.php");

    }

    public function crear(){

        if($_POST){

            print_r($_POST);
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            Empleado::crear($nombre,$correo);
        }

        include_once("vista/empleados/crear.php");

    }

    public function editar(){

        include_once("vista/empleados/editar.php");

    }
}


?>