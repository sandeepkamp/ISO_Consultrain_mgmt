<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public $fillable = [
        'agency_name',
        'agency_phone_number',
        'agency_email',
        'street_name',
        'pincode',
        'city',
        'state',
        'country',
    ];


    public function project_management()
    {
        return $this->hasMany('App\ProjectManagement','agency_id');
    }
}
