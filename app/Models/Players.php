<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    // use HasFactory;
    public $table = 'Players';
    protected $fillable = [
        'name',
        'clubs_id',
        'position',
        'photo',
        'height',
        'created_at',
        'updated_at',
    ];

    public function clubs(){
        return $this->belongsTo(Clubs::class, 'clubs_id', 'id');
    }
}
