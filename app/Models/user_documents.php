<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_documents extends Model
{
    use HasFactory;
    protected $table = 'user_documents';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "company_name",
        "company_photo",
        "company_gst",
        "aadhar_number",
        "aadhar_photo",
        "pan_number",
        "pan_photo",
        "photo"
	];
}
