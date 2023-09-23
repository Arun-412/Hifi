<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributer_wallet extends Model
{
    use HasFactory;
    protected $table = 'distributer_wallet';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "balance",
        "status" 
	];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
