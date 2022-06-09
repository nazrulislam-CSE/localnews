<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['title','slug','content','category_id','user_id','views','featured'];

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
