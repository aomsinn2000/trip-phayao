<?php

namespace App\Models\SpecialDealCategory;

use App\Models\SpecialDeal\SpecialDeal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecialDealCategory extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'special_deal_categories';
    protected $fillable = [
        'category_no',
        'name_th',
        'name_en',
        'image',
        'is_status',
        'creator',
        'editor'
    ];

    public function specialDeals()
    {
        return $this->hasMany(SpecialDeal::class);
    }
}
