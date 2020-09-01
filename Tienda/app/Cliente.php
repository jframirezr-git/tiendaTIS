<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nombre','documento','correo','telefono','direccion'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getNombre()
    {
        return $this->attributes['nombre'];
    }

    public function setNombre($nombre)
    {
        $this->attributes['nombre'] = $nombre;
    }

    public function getDocumento()
    {
        return $this->attributes['documento'];
    }

    public function setDocumento($documento)
    {
        $this->attributes['documento'] = $documento;
    }

    public function getCorreo()
    {
        return $this->attributes['correo'];
    }

    public function setCorreo($correo)
    {
        $this->attributes['correo'] = $coreo;
    }

    public function getTelefono()
    {
        return $this->attributes['telefono'];
    }

    public function setTelefono($telefono)
    {
        $this->attributes['telefono'] = $telefono;
    }

    public function getDireccion()
    {
        return $this->attributes['direccion'];
    }

    public function setdireccion($direccion)
    {
        $this->attributes['direccion'] = $direccion;
    }

}
