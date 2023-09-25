<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account_detail extends Model
{
    use HasFactory;
    protected $table = 'account_detail';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "bank_id",
        "account_number",
        "verified",
        "status" 
	];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
