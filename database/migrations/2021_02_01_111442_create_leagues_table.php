<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false)->comment('نام لیگ');
            $table->text('flag')->nullable(true)->comment('پرچم');
            $table->string('contient_name')->nullable(false)->comment('نام قاره');
            $table->string('country_name')->nullable(false)->comment('نام کشور');
            $table->string('state_name')->nullable(true)->comment('نام استان');
            $table->string('city_name')->nullable(true)->comment('نام شهر');
            $table->string('extra_info')->nullable(true)->comment(' توضیحات');
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
        Schema::dropIfExists('leagues');
    }
}
