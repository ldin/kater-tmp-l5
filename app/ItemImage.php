<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
    protected $table = 'item-image';

    public function category()
    {
        return $this->belongsTo('App\Item');
    }

}
