<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Brand has many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = brand_id, localKey = id)
        return $this->hasMany(Product::class);
    }

    /**
     * Brand belongs to many (many-to-many) Category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        // belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = brand_id, otherKeyOnPivot = category_id)
        return $this->belongsToMany(Category::class);
    }
}
