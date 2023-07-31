<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'ser_name',
        'cat_id',
        'details',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }
}
