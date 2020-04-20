<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'category_id'
    ];

    public function Category(){
        return $this->BelongsTo('App\Category');
    }
}
