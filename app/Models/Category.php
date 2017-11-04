<?php

namespace App\Models;

use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $table = 'categories';

    protected $fillable = ['name', 'parent_id', 'description'];


    public function products()
    {
        return $this->hasMany(Product::class);
    }
}