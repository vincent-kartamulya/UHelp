<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certificate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function recipient()
    {
        return $this->belongsTo(Recipient::class);
    }

}
