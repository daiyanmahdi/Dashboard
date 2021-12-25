<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $table = "sub_categories";

    protected $guarded = ['id'];


    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }

}
