<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class Artist extends Model
{
    use HasFactory;
    use Uuid;

    protected $table = 'artists';

    protected $fillable = [
        'title',
        'album',
        'duration',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public $timestamps = false;
}
