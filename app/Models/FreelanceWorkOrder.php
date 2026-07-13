<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelanceWorkOrder extends Model
{
    use HasFactory;

   protected $fillable = [
        'project_ref_no',
        'project_name_client',
        'project_location',
        'date_issued',
        'project_date_time',
        'freelancer_name',
        'freelancer_designation',
        'freelancer_nic_passport',
        'freelancer_contact',
        'project_scope',
        'project_size_exact',
        'project_size_approx',
        'project_price_exact',
        'project_price_approx',
        'price_basis',
        'rate',
        'total_price',
        'payment_advance',
        'payment_balance',
        'remarks',
        'special_conditions',
        'approvals_freelancer_name',
        'approvals_freelancer_signature',
        'approvals_freelancer_date',
        'approvals_finance',
        'approvals_finance_date',
        'approvals_admin',
        'approvals_admin_date',
        
        'approvals_ceo_signature',
        'approvals_ceo_date',
    ];

}