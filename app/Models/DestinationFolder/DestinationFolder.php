<?php

namespace App\Models\DestinationFolder;

use App\Models\TouristAttraction\TouristAttraction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DestinationFolder extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'destination_folders';
    protected $fillable = [
        'folder_no',
        'is_status',
        'name_th',
        'name_en',
        'slogan_th',
        'slogan_en',
        'sub_district',
        'district',
        'province',
        'postcode',
        'detail_th',
        'detail_en',
        'banner_image',
        'cover_image',
        'link',
        'creator',
        'editor'
    ];
    public function touristAttractions()
    {
        // return $this->hasMany(TouristAttraction::class,);
        return $this->belongsToMany(TouristAttraction::class,'folder_tourist_attractions');
    }
}
