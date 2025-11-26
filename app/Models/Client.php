<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Client extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'order',
    ];
}
