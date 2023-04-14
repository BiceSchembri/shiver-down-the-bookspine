<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'title',
        'author',
        'language',
        'status',
        'description',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
