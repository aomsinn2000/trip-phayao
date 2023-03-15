<?php

namespace App\Models\TouristAttractionCategory;

use App\Models\TouristAttraction\TouristAttraction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristAttractionCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tourist_attraction_categories';
    protected $fillable = [
        'category_no',
        'name_th',
        'name_en',
        'image',
        'is_popular',
        'is_status',
        'creator',
        'editor'
    ];

    public function touristAttractions()
    {
        return $this->hasMany(TouristAttraction::class);
    }
}
