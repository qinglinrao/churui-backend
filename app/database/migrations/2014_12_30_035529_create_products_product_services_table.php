<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsProductServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products_product_services', function(Blueprint $table)
		{
            $table->integer('service_id')->unsigned();
            $table->integer('product_id')->unsigned();

            $table->index(['service_id', 'product_id'], 'products_services');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products_product_services');
	}

}
