<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dmt_plan extends Model
{
    use HasFactory;
    protected $table = 'dmt_plans';
	public $timestamps = true;
	protected $fillable = [
        "user_id",
        "plan_name",
        "plan_details"
	];
}
