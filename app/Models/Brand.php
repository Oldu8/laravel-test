<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];
    protected $guarded = [];

    public function cars()
    {
        return $this->hasMany(Car::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }


}
