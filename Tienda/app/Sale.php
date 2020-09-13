<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
     //attributes 
     protected $fillable = ['unit_value','date', 'invoice', 'quantity', 'customer_id', "car_id"];

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
     public function getInvoice()
     {
         return $this->attributes['invoice'];
     }
 
     public function setInvoice($invoice)
     {
         $this->attributes['invoice'] = $invoice;
     }
     public function getQuantity()
     {
         return $this->attributes['quantity'];
     }
 
     public function setQuantity($quantity)
     {
         $this->attributes['quantity'] = $quantity;
     }

     public function getCustomerId()
     {
         return $this->attributes['customer_id'];
     }
 
     public function setCustomerId($customer_id)
     {
         $this->attributes['customer_id'] = $customer_id;
     }

     public function getCarId()
     {
        $this->attributes['car_id'] = $car_id;
     }

     public function setCarId($car_id)
     {
         $this->attributes['car_id'] = $car_id;
     }

     //relationships
     public function customer()
     {
        return $this->belongsTo('App\Customer');
     }

     public function car()
     {
        return $this->belongsTo('App\Car');
     }

}
