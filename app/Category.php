<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = ['id'];

    public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}


