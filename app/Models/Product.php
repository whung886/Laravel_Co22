<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	use HasFactory;

	protected $fillable = ['name', 'unit', 'itm_code', 'supplier_id', 'category_id', 'min_qty', 'cost', 'unit_price', 'qty_instock', 'status', 'remark'];

	public function orders() {
		return $this->belongsToMany(Order::class);
	}

	public function procurements() {
		return $this->belongsToMany(Procurement::class);
	}

	public function sales() {
		return $this->belongsToMany(Sale::class);
	}
}
