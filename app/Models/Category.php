<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'alias',
        'order',
        'parent_id',
        'keywords',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
