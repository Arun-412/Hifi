<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributer_fee extends Model
{
    use HasFactory;
    protected $table = 'distributer_fee';
	public $timestamps = true;
	protected $fillable = [
        "from_amount",
        "to_amount",
        "fee_type",
        "fee",
        "status" 
	];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
