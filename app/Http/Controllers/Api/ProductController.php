<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		// $product = new Product;
		// $product->name = $request->name;
		// $product->unit = $request->unit;
		// $product->itm_code = $request->itm_code;
		// $product->supplier_id = $request->supplier_id;
		// $product->category_id = $request->category_id;
		// $product->min_qty = $request->min_qty;
		// $product->cost = $request->cost;
		// $product->unit_price = $request->unit_price;
		// $product->qty_instock = $request->qty_instock;
		// $product->status = $request->status;

		$product = new Product($request->all());

		$result = $product->save();

		if ($result) {
			return ['status' => 1];
		} else {
			return ['status' => 0];
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
