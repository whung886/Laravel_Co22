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
		$status = false;
		$products = Product::get();
		// $products = Product::where('category_id', 2)->where('supplier_id', 2)->orderBy('qty_instock', 'asc')->get();
		if (isset($products)) {
			$status = true;
		}
		return ['status' => $status, 'result' => $products];
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
		$product = Product::findOrFail($id);
		//
		//$product = Product::where('category_id', 1)->first();

		if (isset($product)) {
			$result = true;
		}
		return ['status' => $result, 'result' => $product];
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	// public function update(Request $request, $id) {
	public function update(Request $request, Product $product) {
		$rows = $product->update($request->all());
		if ($rows == 1) {
			return ['status' => true];
		} else {
			return ['status' => false];
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	// public function destroy($id) {
	public function destroy(Product $product) {
		$status = $product->delete();
		return ['status' => $status];
	}

	// Route Model Binding
	public function demoModelBinding(Product $product) {
		dd($product);
	}
}
