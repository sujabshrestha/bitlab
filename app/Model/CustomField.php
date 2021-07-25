<?php

namespace App\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class CustomField extends Model
{
    use Sluggable, SoftDeletes;



    protected $fillable = [
        'post_author',
        'post_content',
        'title',
        'slug',
        'status',
        'post_parent',
        'post_type',
        'field_position',
        'position',
        'field_type',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function childrens(){

        return $this->hasMany(CustomField::class, 'post_parent', 'id')->orderBy('position', 'ASC');

    }

    public function postType(){
        return $this->belongsTo(PostType::class, 'post_type', 'id');

    }
}
