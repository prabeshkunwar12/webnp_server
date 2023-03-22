<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'location',
    ];

    public function subCategories(){
        return $this->belongsToMany(SubCategories::class, 'subcategory_articles_pivot', 'article_id', 'sub_category_id');
    }
}
