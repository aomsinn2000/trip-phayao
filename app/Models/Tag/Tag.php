<?php

namespace App\Models\Tag;

use App\Models\TouristAttraction\TouristAttraction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tags';
    protected $fillable = [
        'name_th',
        'name_en',
        'is_status',
        'creator',
        'editor'
    ];

    public function touristAttractions()
    {
        // return $this->hasMany(TouristAttraction::class);
        return $this->belongsToMany(TouristAttraction::class, 'tourist_attraction_tags')
            ->withPivot('order')
            ->orderBy('order');
    }
}
