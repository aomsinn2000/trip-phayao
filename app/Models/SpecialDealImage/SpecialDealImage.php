<?php

namespace App\Models\SpecialDealImage;

use App\Models\SpecialDeal\SpecialDeal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialDealImage extends Model
{
    use HasFactory;
    protected $table = 'special_deal_images';
    protected $fillable = [
        'special_deal_id',
        'image',
    ];

    public function specialDeal(){
        return $this->belongsTo(SpecialDeal::class);
    }
}
