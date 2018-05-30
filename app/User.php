<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'security_question',
        'security_answer',
        'agent_id',
        'profession_id',
        'role_id',
        'company_details_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\UserRole');
    }

    public function news(){
        return $this->hasMany('App\News');
    }

    public function companyDetail(){
        return $this->belongsTo('App\CompanyDetail');
    }

    public function isAdmin(){

        if($this->role->id == 1 && $this->status == 'active'){
            return true;
        }

        return false;

    }

    public function isUser(){

        if($this->role->id == 2 && $this->status == 'active'){
            return true;
        }

        return false;

    }
}
