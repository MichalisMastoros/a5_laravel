<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'city',
        'country',
        'job_title'
    ];

    public function Company() 
    {
        return $this->belongsTo('App\Mpdels\Company','company_id');
    }
}