<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $dates = ['date'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
}
