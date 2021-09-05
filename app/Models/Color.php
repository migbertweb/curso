<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Color belongs to many (many-to-many) Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        // belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = color_id, otherKeyOnPivot = product_id)
        return $this->belongsToMany(Product::class);
    }

    /**
     * Color belongs to many (many-to-many) Size.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sizes()
    {
        // belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = color_id, otherKeyOnPivot = size_id)
        return $this->belongsToMany(Size::class);
    }
}
