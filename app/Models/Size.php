<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name', 'product_id'];

    /**
     * Size belongs to Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        // belongsTo(RelatedModel, foreignKey = product_id, keyOnRelatedModel = id)
        return $this->belongsTo(Product::class);
    }

    /**
     * Size belongs to many (many-to-many) Color.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function colors()
    {
        // belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = size_id, otherKeyOnPivot = color_id)
        return $this->belongsToMany(Color::class);
    }
}
