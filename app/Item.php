<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function properties ()
    {
        return $this->belongsToMany('App\Property', 'item-property');
    }


    public function allImages()
    {
        return $this->hasMany('App\ItemImage');
    }
}
