<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }
}