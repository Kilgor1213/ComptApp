<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    use HasFactory;

    protected $fillable = [
        
    ];

    protected $hidden = [
        'created_at'
        'updated_at'
    ];

    public function exercices_likes() {
        return $this->belongsTo(Exerices::class);
    }

    public function chapters_likess() {
        return $this->belongsTo(Chapters::class);
    }
}



}
