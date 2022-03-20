<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
	use HasFactory;

	protected $fillable = ['name', 'ear_no', 'address', 'inv_addr', 'phone', 'contact', 'email', 'owner', 'contract_start', 'contract_end', 'userid', 'pwd', 'validation', 'status'];
}
