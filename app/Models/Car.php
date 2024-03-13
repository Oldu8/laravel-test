<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['brand_id', 'model', 'transmission', 'vin'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
