<?php 


class Persona
{
    public $nombre;
    public $apellido;
    public $edad;
    private $telefono;

    function hablar(){
    	echo 'Estoy hablando';
    }
    function ver()
    {
    	
    }
    function cantar()
    {
    	
    }
    function setTelefono($telefono)
    {
        $this->$telefono = $telefono;
    }
    function getTelefono()
    {
       return $this->telefono;
    }
    function validarTelefono($telefono)
    {
        
    }
}

 ?>