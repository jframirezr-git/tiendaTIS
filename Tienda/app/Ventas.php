<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //attributes id, valor_unidad, fecha, factura, cantidad, documento, id_articulo y id_cliente
    protected $fillable = ['valor_unidad','fecha', 'factura', 'cantidad', 'documento', 'id_articulo', 'id_cliente'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getValor_unidad()
    {
        return $this->attributes['valor_unidad'];
    }

    public function setValor_unidad($valor_unidad)
    {
        $this->attributes['valor_unidad'] = $valor_unidad;
    }

    public function getFecha()
    {
        return $this->attributes['fecha'];
    }

    public function setFecha($fecha)
    {
        $this->attributes['fecha'] = $fecha;
    }
    public function getFactura()
    {
        return $this->attributes['factura'];
    }

    public function setFactura($factura)
    {
        $this->attributes['factura'] = $factura;
    }
    public function getCantidad()
    {
        return $this->attributes['cantidad'];
    }

    public function setCantidad($cantidad)
    {
        $this->attributes['cantidad'] = $cantidad;
    }
    public function getDocumento()
    {
        return $this->attributes['documento'];
    }

    public function setDocumento($documento)
    {
        $this->attributes['documento'] = $documento;
    }
    public function getId_articulo()
    {
        return $this->attributes['id_articulo'];
    }

    public function setId_articulo($id_articulo)
    {
        $this->attributes['id_articulo'] = $id_articulo;
    }
    public function getId_cliente()
    {
        return $this->attributes['id_cliente'];
    }

    public function setId_cliente($id_cliente)
    {
        $this->attributes['id_cliente'] = $id_cliente;
    }
}
