<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poster extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'visibility'
    ];

    public function commetns() {
        return $this->hasMany(Comment::class);
    }
}
