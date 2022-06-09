<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['avater','user_id','about','facebook','youtube','twitter'];
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}