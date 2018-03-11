<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'title', 'body', 'user_id',
    ];

    public function isLiked()
    {
      $likeExists = Like::where('user_id', Auth::user()->id)->where('article_id', $this->id)->get();

      if(count($likeExists) == 1) {
        return true;
      } elseif(count($likeExists) == 0) {
        return false;
      //To see later -- error management
      } else {
        return redirect()->back();
      }
    }


    public function user() {
      return $this->belongsTo('App\User');
    }

    public function tags() {
      return $this->belongsToMany('App\Tag');
    }

    public function likes() {
      return $this->hasMany('App\Like');
    }
}
