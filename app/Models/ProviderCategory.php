<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProviderCategory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    protected $table = 'provider_categories';


    public function products()
    {
        return $this->hasMany(Product::class, 'provider_category_id', 'id');
    }
}
