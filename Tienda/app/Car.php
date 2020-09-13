<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     //attributes 
     protected $fillable = ['customer_id', "status", "item_list"];

     //getters and setters
     public function getId()
     {
         return $this->attributes['id'];
     }
 
     public function setId($id)
     {
         $this->attributes['id'] = $id;
     }
 
     public function getStatus()
     {
         return $this->attributes['status'];
     }
 
     public function setStatus($status)
     {
         $this->attributes['status'] = $status;
     }
 
     public function getItemList()
     {
         return $this->attributes['item_list'];
     }
 
     public function setItemList($item_list)
     {
         $this->attributes['item_list'] = $item_list;
     }
     
     //relationships
     public function sale()
     {
        return $this->hasOne('App\Sale');
     }

     public function customer()
     {
        return $this->belongsTo('App\Customer');
     }
}
