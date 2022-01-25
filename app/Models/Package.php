<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_name',
        'room_id',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_delete' => 'boolean',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function rate()
    {
        return $this->hasMany(Rate::class, 'package_id');
    }
}
