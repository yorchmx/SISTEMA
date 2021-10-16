<?php

echo $controlador;
echo $accion;

include_once("controladores/controlador_paginas.php");

$controlador= new ControladorPaginas();
$controlador->inicio();

?>