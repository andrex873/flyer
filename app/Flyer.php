<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'state',
        'country',
        'price',
        'description'
    ];

    public function photos() {
        return $this->hasMany('App\Photo');
    }

    /**
     *
     **/
    public static function locatedAt($zip, $street) {
        $street = str_replace('-', ' ', $street);
        return static::where(compact('zip', 'street'))->first();
    }

    public function addPhoto(Photo $photo) {
        return $this->photos()->save($photo);
    }
}
