<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    use HasFactory;


    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'created_at'
        'updated_at'
    ];

    public function likes() {
        return $this->belongsTo(Likes::class);
    }

}
