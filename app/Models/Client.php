<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory ,SoftDeletes;
    protected  $fillable =[
        'name', 'statues', 'mobile','company_name','location',
        'iban', 'vat_number', 'email', 'id_number', 'bobox',
        'note', 'web_site', 'total_expectation', 'total_sales',
        'total_refund', 'note', 'web_site', 'total_expectation',
        'total_sales', 'total_refund','created_by','user_id'
    ];
}
