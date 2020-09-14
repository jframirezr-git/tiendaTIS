<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static create(array $only)
 * @method static find($id)
 */

Class Supplier extends Model{
    protected $fillable = ['name','document', 'mail', 'direction', 'phone'];

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

    public function getDocument()
    {
        return $this->attributes['document'];
    }

    public function setDocument($document)
    {
        $this->attributes['document'] = $document;
    }
    public function getMail()
    {
        return $this->attributes['mail'];
    }

    public function setMail($mail)
    {
        $this->attributes['mail'] = $mail;
    }
    public function getDirection()
    {
        return $this->attributes['direction'];
    }

    public function setDirection($direction)
    {
        $this->attributes['direction'] = $direction;
    }
    public function getPhone()
    {
        return $this->attributes['phone'];
    }

    public function setPhone($phone)
    {
        $this->attributes['phone'] = $phone;
    }

    public function  item(){
        $this->hasMany('App\Item');
    }
}
