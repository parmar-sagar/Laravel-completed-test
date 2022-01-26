<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    //

    protected $fillable = [
        'user_id','title','content','is_draft','is_members_only','posted_at'
    ];

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
