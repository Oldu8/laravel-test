<?php

namespace App\Models;

use App\Enums\Cars\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['brand_id', 'model', 'transmission', 'vin', 'status'];

    protected $casts = [
        'status' => Status::class,
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getCanDeleteAttribute()
    {
        return $this->status === Status::DRAFT || $this->status === Status::CANCELLED;
    }

    public function scopeOfActive($query)
    {
        return $query->where('status', Status::ACTIVE);
    }
}
