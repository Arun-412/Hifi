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
        "service_name",
        "provider_name",
        "fees",
        "status" 
	];
}
