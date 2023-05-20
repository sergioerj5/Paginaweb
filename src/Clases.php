<?php

class combos
{
    
    public $paquetes;

    public function __construct($paquetes)
    {
        $this->paquete = $paquetes;
        
    }

    public function insertarDatos($conexion)
    {
        $query = "INSERT INTO reservaciones(fk_tipo_paquete) 
        VALUES ('$this->paquete')";

        if ($conexion->query($query) === TRUE) {
            return TRUE;
        }
    }
}

?>