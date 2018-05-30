<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['display_order'];

    public function companyDetails(){
        return $this->belongsToMany('App\CompanyDetail');
    }
}
