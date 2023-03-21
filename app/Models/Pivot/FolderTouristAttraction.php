<?php

namespace App\Models\Pivot;

use App\Models\DestinationFolder\DestinationFolder;
use App\Models\TouristAttraction\TouristAttraction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FolderTouristAttraction extends Model
{
    use HasFactory;
    protected $table = 'folder_tourist_attractions';
}
