<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'categories'];

    protected $dates = ['created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function snip($length) {
        return substr($this->content, 0, $length);
    }
}
