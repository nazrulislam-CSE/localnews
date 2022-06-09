<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['logo','sitename','ownership','about_site','site_address','site_contact_no','site_email','copyright_text'];

    public function getlogoAttribute($logo){
        return asset($logo);
    }
}
