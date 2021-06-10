<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->boolean('visibility')->default(1);
            $table->string('image');
            $table->text('description');
            $table->tinyInteger('num_room');
            $table->tinyInteger('num_bath');
            $table->tinyInteger('num_bed');
            $table->smallInteger('mq');
            $table->float('price_day', 6,2);
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('street');
            $table->string('zip_code');
            $table->tinyInteger('floor');
            $table->decimal('latitude', 10,8);
            $table->decimal('longitude', 11,8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apartments');
    }
}
