<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Testimonial extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'name',
        'designation',
        'company',
        'feed',
        'is_featured',
    ];
}
