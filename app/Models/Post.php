<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Post extends Model
{
    use HasFactory;
     public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

     public function author() {
        return $this->belongsTo(User::class, 'author_id');
    }

  
}