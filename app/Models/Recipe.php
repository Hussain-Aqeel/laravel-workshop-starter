<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'description',
      'ingredients',
      'method',
      'image',
      'user_id',
      'category_id'
    ];

    protected $casts = [
        'ingredients' => 'array',
        'method' => 'array'
    ];

    protected $with = [
        'user', 'category'
    ];


    function user(){
        return $this->belongsTo(User::class);
    }

    function category() {
        return $this->belongsTo(Category::class);
    }

    function comments() {
        return $this->hasMany(Comment::class)->orderByDesc('created_at');
    }

}
