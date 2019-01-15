<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{

    protected $table = 'audits';
    protected $primaryKey = 'id';
    //
    public $fillable = [
        'order_id',
        'int_audit_plnd_date',
        'int_audit_actual_date',
        'int_audit_comment',
        'adequacy_audit_plnd_date',
        'adequacy_audit_actual_date',
        'adequacy_audit_comment',
        'application_plnd_dt',
        'application_actual_dt',
        'application_comment',
    ];

    public function projectManagement()
    {
        return $this->belongsTo(ProjectManagement::class);
    }

}
