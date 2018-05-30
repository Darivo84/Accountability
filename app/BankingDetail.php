<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankingDetail extends Model
{
    protected $fillable = [
        'company_detail_id',
        'acc_name',
        'acc_number',
        'institution_id',
        'acc_type_id',
        'branch_name',
        'branch_code'
    ];

    public function companyDetails(){
        return $this->belongsTo('App\CompanyDetail');
    }
    
    public function institution(){
        return $this->hasOne('App\Institution');
    }

    public function AccountType(){
        return $this->hasOne('App\AccType');
    }
}
