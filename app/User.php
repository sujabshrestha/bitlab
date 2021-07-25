<?php

namespace App;
use App\Model\UserInfo;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User  extends EloquentUser
{
    use  SoftDeletes;

    public function userInfo(){
        return $this->hasMany(UserInfo::class, 'user_id');
    }

}
