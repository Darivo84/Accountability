<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = ['file'];

    protected $upload_path = '/images/uploads/';

    public function getFileAttribute($photo){

        return $this->upload_path . $photo;

    }

}
