<?php

require_once 'nacionalidad.php';

class Persona
{
    public $Nombre;
    public $Direccion;
    public $NumeroDocumento;
    public $Edad;
    public $Nacionalidad;

    public function DatosPersonales()
    {
        echo 'Los datos de la persona son: ' . '<br>';
        echo 'Nombre: ' . $this->Nombre . '<br>';
        echo 'Dirección: ' . $this->Direccion . '<br>';
        echo 'Numero de documento: ' . $this->NumeroDocumento . '<br>';
        echo 'Edad: ' . $this->Edad . '<br>';
        echo 'Id: ' . $this->Nacionalidad->Id . '<br>';
        echo 'Descripción: ' . $this->Nacionalidad->Descripcion;
    }
}
