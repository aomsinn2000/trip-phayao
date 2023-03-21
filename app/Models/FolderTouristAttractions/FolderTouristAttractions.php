<?php

namespace App\Models\FolderTouristAttractions;

use App\Models\DestinationFolder\DestinationFolder;
use App\Models\TouristAttraction\TouristAttraction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderTouristAttractions extends Model
{
    use HasFactory;
    protected $table = 'folder_tourist_attractions';
    public $incrementing = false;
    protected $fillable = [
        'destination_folder_id',
        'tourist_attraction_id'
    ];

    public function destinationFolder()
    {
        return $this->belongsTo(DestinationFolder::class);
    }

    public function touristAttraction()
    {
        return $this->belongsTo(TouristAttraction::class);
    }
}
