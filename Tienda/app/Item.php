<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static create(array $only)
 * @method static find($id)
 */

class Item extends Model{
    protected $fillable = ['name','brand', 'reference', 'stock', 'supplier_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getBrand()
    {
        return $this->attributes['brand'];
    }

    public function setBrand($brand)
    {
        $this->attributes['brand'] = $brand;
    }
    public function getReference()
    {
        return $this->attributes['reference'];
    }

    public function setReference($reference)
    {
        $this->attributes['reference'] = $reference;
    }
    public function getStock()
    {
        return $this->attributes['Stock'];
    }

    public function setStock($stock)
    {
        $this->attributes['stock'] = $stock;
    }

    public function getSupplier_id()
    {
        return $this->attributes['supplier_id'];
    }

    public function setSuppliear_id($supplier_id)
    {
        $this->attributes['supplier_id'] = $supplier_id;
    }


    //Relaciones
    public function supplier(){
        $this->belongsTo('App\Supplier');
    }

    public function return(){
        $this->hasMany('App\ReturnModel');
    }

}
