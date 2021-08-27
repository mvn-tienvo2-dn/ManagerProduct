<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	   $product=[

          [
          	'name'=>'Product 1',
          	'price'=>'100000000',
          	'description'=>'description 1',
          	'image'=>'images/gui.jpg',
          	'quanlity'=>'1'
          ],
                   [
          	'name'=>'Product 2',
          	'price'=>'100000000',
          	'description'=>'description 2',
          	'image'=>'images/gui.jpg',
          	'quanlity'=>'1'
          ],
                   [
          	'name'=>'Product 3',
          	'price'=>'100000000',
          	'description'=>'description 3',
          	'image'=>'images/gui.jpg',
          	'quanlity'=>'1'
          ],
                   [
          	'name'=>'Product 4',
          	'price'=>'100000000',
          	'description'=>'description 4',
          	'image'=>'images/gui.jpg',
          	'quanlity'=>'1'
          ],




	   ];
	   DB::table('products')->insert($product);
	}

}
