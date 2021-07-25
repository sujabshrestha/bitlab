<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'album_id', 'title', 'image'
    ];

    public function album(){
        return $this->belongsTo(Album::class);
    }
}
