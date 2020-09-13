<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Input extends Model
{
    protected $fillable = ['value','date','bill','quantity','item_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getValue()
    {
        return $this->attributes['value'];
    }

    public function setValue($value)
    {
        $this->attributes['value'] = $value;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)
    {
        $this->attributes['date'] = $date;
    }

    public function getBill()
    {
        return $this->attributes['bill'];
    }

    public function setBill($bill)
    {
        $this->attributes['bill'] = $bill;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }

    public function getItemId()
    {
        return $this->attributes['item_id'];
    }

    public function setItemId($item_id)
    {
        $this->attributes['item_id'] = $item_id;
    }

    //Relacion muchos a uno con Item
    public function item()
    {
        return $this->belongsTo('App\Item');
    }

}
