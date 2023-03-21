<?php

namespace App\Models\HomeBanner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBanner extends Model
{
    use HasFactory;
    protected $table = 'home_banners';
    protected $fillable = [
        'home_no',
        'is_active',
        'is_status',
        'name',
        'start_date',
        'end_date',
        'image',
        'link',
        'creator',
        'editor',
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            if ($model->is_active && $model->isDirty('is_active')) {
                static::where('id', '!=', $model->id)->update(['is_active' => false]);
            }
        });
    }
}
