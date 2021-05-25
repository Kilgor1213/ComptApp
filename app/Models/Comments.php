<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'text'
    ];

    protected $hidden = [
        'created_at'
        'updated_at'
    ];

    public function exercices_comments() {
        return $this->belongsTo(Exerices::class);
    }

    public function chapters_comments() {
        return $this->belongsTo(Chapters::class);
    }
}


