<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->increments('id', true);
            
            $table->date('order_date');
            $table->date('arrived_date');
            $table->string('status'); // Active, Pending, Approved, Cancelled, Finished
            $table->timestamps();
            // user_id FK customer
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
