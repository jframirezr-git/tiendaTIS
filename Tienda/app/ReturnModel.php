<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnModel extends Model
{
    //attributes 
    protected $fillable = ['unit_value','date', 'quantity', 'item_id'];

    //getters and setters
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getUniteValue()
    {
        return $this->attributes['unit_value'];
    }

    public function setUniteValue($unit_value)
    {
        $this->attributes['unit_value'] = $unit_value;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)
    {
        $this->attributes['date'] = $date;
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

    //relationships
    public function item()
    {
       return $this->belongsTo('App\Item');
    }

}
