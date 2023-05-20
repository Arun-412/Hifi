<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;
    protected $table = 'services';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "money_transfer",
        "bbps",
        "recharge",
        "pg" 
	];
}
