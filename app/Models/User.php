<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = 'users';
	public $timestamps = true;
	protected $fillable = [
        "full_name",
        "user_name",
        "company_name",
        "company_photo",
        "company_gst",
        "email",
        "email_verify",
        "email_otp",
        "phone",
        "phone_verify",
        "phone_otp",
        "password",
        "address",
        "dmt_plan",
        "account_status",
        "account_type",
        "managed_by",
        "aadhar_number",
        "aadhar_photo",
        "pan_number",
        "pan_photo",
        "photo"
	];
    protected $hidden = [
        'password'
    ];
}
