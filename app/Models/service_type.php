<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_type extends Model
{
    use HasFactory;
    protected $table = 'service_type';
	public $timestamps = true;
	protected $fillable = [
        "service_type_id",
        "service_type_name",
        "service_type_status",
	];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
