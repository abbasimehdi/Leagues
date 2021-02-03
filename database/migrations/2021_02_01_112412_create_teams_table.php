<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('league_id');
            $table->string('name')->nullable(false)->comment('نام تیم');
            $table->integer('no_player')->default(23)->nullable(false)->comment('تعداد بازیکن');
            $table->text('flag')->nullable(false)->comment('پرچم');
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
        Schema::dropIfExists('teams');
    }
}
