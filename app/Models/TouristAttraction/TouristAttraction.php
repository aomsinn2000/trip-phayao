<?php

namespace App\Models\TouristAttraction;

use App\Models\DestinationFolder\DestinationFolder;
use App\Models\Pivot\FolderTouristAttraction;
use App\Models\Tag\Tag;
use App\Models\TouristAttractionCategory\TouristAttractionCategory;
use App\Models\TouristAttractionImage\TouristAttractionImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TouristAttraction extends Model
{
    use HasFactory;
    protected $table = 'tourist_attractions';
    protected $fillable = [
        'attraction_no',
        'is_popular',
        'is_status',
        'is_folder',
        'tourist_attraction_category_id',
        'name_th',
        'name_en',
        'detail_th',
        'detail_en',
        'sub_district',
        'district',
        'province',
        'postcode',
        'map_link',
        'latitude',
        'longitude',
        'travel_th',
        'travel_en',
        'season_recommend_th',
        'season_recommend_en',
        'description_th',
        'description_en',
        'cover_image',
        'creator',
        'editor'
    ];
    public function destinationFolders()
    {
        return $this->belongsToMany(DestinationFolder::class,'folder_tourist_attractions');
    }

    // public function folderTouristAttractions()
    // {
    //     return $this->belongsToMany(FolderTouristAttraction::class, 'folder_tourist_attractions');
    // }

    public function touristAttractionCategory()
    {
        return $this->belongsTo(TouristAttractionCategory::class);
    }

    public function touristAttractionImages()
    {
        return $this->hasMany(TouristAttractionImage::class);
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}
