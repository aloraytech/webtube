<?php

namespace App\Models\Movies;

use App\Models\Category\Category;
use App\Models\System\Activities;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'quality',
        'banner',
        'desc',
        'tags',
        'release_on',
    ];
    protected $casts = [
        'tags'=> 'array',
    ];

    public function videos()
    {
        return $this->hasOne(Videos::class,'id','videos_id')->withDefault();
    }


    public function categories()
    {
        return $this->hasOne(Category::class,'id','categories_id')->withDefault();
    }

    public function activities()
    {
        return $this->belongsToMany(Activities::class);
    }


}
