<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    /**
     * All fields inside the  array are not mass-assignable.
     *
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];

    /**
     * Product has many Sizes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sizes()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = product_id, localKey = id)
        return $this->hasMany(Size::class);
    }

    /**
     * Product belongs to Brand.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        // belongsTo(RelatedModel, foreignKey = brand_id, keyOnRelatedModel = id)
        return $this->belongsTo(Brand::class);
    }

    /**
     * Product belongs to Subcategory.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subcategory()
    {
        // belongsTo(RelatedModel, foreignKey = subcategory_id, keyOnRelatedModel = id)
        return $this->belongsTo(Subcategory::class);
    }

    /**
     * Product belongs to many (many-to-many) Color.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function colors()
    {
        // belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = product_id, otherKeyOnPivot = color_id)
        return $this->belongsToMany(Color::class);
    }

    /**
     * Product morphs many Image.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images()
    {
        // morphMany(MorphedModel, morphableName, type = able_type, relatedKeyName = able_id, localKey = id)
        return $this->morphMany(Image::class, 'imageable');
    }
}
