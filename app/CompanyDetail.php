<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $fillable = [
        'trading_name',
        'company_name',
        'trading_name',
        'registration_number',
        'vat_number',
        'region_id',
        'business_size_id',
        'business_category_id',

    ];

    public function region(){
        return $this->belongsToMany('App\Region');
    }

    public function industryCategory(){
        return $this->belongsToMany('App\IndustryCategory');
    }

    public function contactDetail(){
        return $this->hasOne('App\ContactDetail');
    }

    public function bankingDetail(){
        return $this->hasOne('App\BankingDetail');
    }

    public function businessSize(){
        return $this->hasOne('App\BusinessSize');
    }

    public function businessCategory(){
        return $this->hasOne('App\BusinessCategory');
    }


}
