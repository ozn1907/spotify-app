<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Artist extends Model
{
    use HasFactory, SoftDeletes;

    protected static function booted()
    {
        static::creating(function ($artist) {
            $artist->uuid = Uuid::uuid4();
        });
    }

    protected $fillable = [
        'title',
        'album',
        'duration',
        'uuid',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public $timestamps = false;
}
