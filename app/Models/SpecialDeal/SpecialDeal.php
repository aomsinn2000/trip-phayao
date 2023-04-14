<?php

namespace App\Models\SpecialDeal;

use App\Models\SpecialDealCategory\SpecialDealCategory;
use App\Models\SpecialDealImage\SpecialDealImage;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecialDeal extends Model
{
    use HasFactory;
    protected $table = 'special_deals';
    protected $fillable = [
        'special_deal_category_id',
        'deal_no',
        'is_popular',
        'is_status',
        'name_th',
        'name_en',
        'quantity',
        'price',
        'discount',
        'discount_type',
        'discount_price',
        'start_date',
        'end_date',
        'description_th',
        'description_en',
        'condition_th',
        'conditiob_en',
        'cover_image',
        'view',
        'creator',
        'editor'
    ];

    public function specialDealCategory()
    {
        return $this->belongsTo(SpecialDealCategory::class);
    }

    public function specialDealImages()
    {
        return $this->hasMany(SpecialDealImage::class);
    }
}
