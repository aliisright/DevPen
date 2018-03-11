<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile() {
      return $this->hasOne('App\Profile');
    }

    public function role() {
      return $this->belongsTo('App\Role');
    }

    public function articles() {
      return $this->hasMany('App\Article');
    }

    public function followers() {
      return $this->belongsToMany('App\FollowerFollowed', 'follower_followed', 'followed_id', 'follower_id');
    }

    public function followeds() {
      return $this->belongsToMany('App\FollowerFollowed', 'follower_followed', 'follower_id', 'followed_id');
    }

    public function likes() {
      return $this->hasMany('App\Like');
    }
}
