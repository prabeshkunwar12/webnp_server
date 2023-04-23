<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Posts extends Model 
{
    use HasFactory;
    

    protected $table = 'posts';

    protected $fillable = [
        'userID',
        'approvalStatus',
        'CategoryId',
        'title',
        'content',
        'view_count'
    ];

    public function incrementViewCount() {
        $this->view_count++;
        return $this->save();
    }
}
