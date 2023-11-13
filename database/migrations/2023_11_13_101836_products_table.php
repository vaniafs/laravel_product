<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->date('production_date');
            $table->timestamps();
        });

        // Inserting initial data
        DB::table('products')->insert([
            ['name' => 'Smartphone', 'price' => 1000, 'production_date' => '2022-01-01'],
            ['name' => 'T-shirt', 'price' => 20, 'production_date' => '2022-02-15'],
            ['name' => 'Programming Book', 'price' => 50, 'production_date' => '2021-12-10'],
            ['name' => 'Coffee Table', 'price' => 150, 'production_date' => '2022-03-05'],
            ['name' => 'Action Figure', 'price' => 30, 'production_date' => '2022-04-20'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
