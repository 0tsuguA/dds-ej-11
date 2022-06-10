<?php
require_once 'modelo/persona.php';
require_once 'modelo/nacionalidad.php';

$nacionalidad = new Nacionalidad();
$nacionalidad->Id = 4683135;
$nacionalidad->Descripcion = 'Argentino';

$persona = new Persona();
$persona->Nombre = 'Augusto';
$persona->Direccion = 'Corrientes y Tucuman';
$persona->NumeroDocumento = 4486065;
$persona->Edad = '19 Años';
$persona->Nacionalidad= $nacionalidad;

$persona->DatosPersonales();
