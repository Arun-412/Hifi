<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    use HasFactory;
    protected $table = 'providers';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "provider_name",
        "provider_email",
        "provider_mobile",
        "status" 
	];
}
