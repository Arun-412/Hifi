<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class money_transfer_report extends Model
{
    use HasFactory;
    protected $table = 'money_transfer_report';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "account_id",
        "transaction_id",
        "transaction_details",
        "amount",
        "status" 
	];
    protected $hidden = [
        'id',
        'updated_at',
    ];
}
