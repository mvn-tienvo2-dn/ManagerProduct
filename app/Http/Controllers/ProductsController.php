<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Product;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['productlist']=DB::table('products')->get();
      return view('listproduct',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('createproduct');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{       

	   $filename=$request->file('img')->getClientOriginalName();
       $product= new Product;
       $product->name=$request->name;
       $product->price=$request->price;
       $product->image=$filename;
       $product->description=$request->description;
       $product->quanlity=$request->quantity;
       $product->save();
       $request->file('img')->move('images',$filename);
       return redirect('product/')->with(['success'=>'Thêm thành công']);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
