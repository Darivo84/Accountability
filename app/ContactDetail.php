<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetail extends Model
{
    protected $fillable = [
        'company_detail_id',
        'telephone',
        'mobile',
        'fax',
        'group_email',
        'products',
        'description',
        'physical_address_1',
        'physical_address_2',
        'physical_address_3',
        'postal_code',
        'postal_address_1',
        'postal_address_2',
        'postal_address_3',
        'web_address',
    ];

    public function companyDetail(){
        return $this->belongsTo('App\CompanyDetail');
    }
}
