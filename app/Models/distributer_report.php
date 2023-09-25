<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributer_report extends Model
{
    use HasFactory;
    protected $table = 'distributer_report';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "retailer_id",
        "service_id",
        "service_detail_id",
        "amount",
        "o_balance",
        "commission",
        "c_balance",
        "status" 
	];
    protected $hidden = [
        'id',
        'updated_at',
    ];
}
