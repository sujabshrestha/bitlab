<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{
    use Sluggable, SoftDeletes;

    protected $fillable = [
        'id', 'title', 'slug', 'feature_image', 'status'
    ];

    public function sluggable() {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function galleries(){
        return $this->hasMany(Gallery::class);
    }
}
