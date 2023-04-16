<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'firstname',
        'lastname',
        'description',
        'slug',
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function authorName()
    {
        $authorName = $this->lastname . ', ' . $this->firstname;
        return $authorName;
    }
}
