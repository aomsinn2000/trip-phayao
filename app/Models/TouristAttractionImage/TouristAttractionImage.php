<?php

namespace App\Models\TouristAttractionImage;

use App\Models\TouristAttraction\TouristAttraction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristAttractionImage extends Model
{
    use HasFactory;

    protected $table = 'tourist_attraction_images';
    protected $fillable = [
        'tourist_attraction_id',
        'image'
    ];

    public function touristAttraction(){
        return $this->belongsTo(TouristAttraction::class);
    }
}
