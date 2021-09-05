<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['url', 'imageable_id', 'imageable_type'];

    /**
     * Image morphs to models in imageable_type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function imageable()
    {
        // morphTo($name = imageable, $type = imageable_type, $id = imageable_id)
        // requires imageable_type and imageable_id fields on $this->table
        return $this->morphTo();
    }
}
