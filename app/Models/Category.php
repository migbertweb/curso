<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    /**
     * Category has many Subcategories.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subcategories()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = category_id, localKey = id)
        return $this->hasMany(Subcategory::class);
    }

    /**
     * Category belongs to many (many-to-many) Brand.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function brands()
    {
        // belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = category_id, otherKeyOnPivot = brand_id)
        return $this->belongsToMany(Brand::class);
    }

    /**
     * Category has many Products through Subcategory.
     * Works for 1-1/1-m through 1-1/1-m
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        // hasManyThrough(FarModel, closeModel, keyOnCloseModel = category_id, keyOnFarModel = subcategory_id)
        return $this->hasManyThrough(Product::class, subcategory::class);
    }
}
