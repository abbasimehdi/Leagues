<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team_id');
            $table->string('name')->nullable(false)->comment('نام');
            $table->enum('position', array('player','coach','technical'))->nullable(false)->comment('پوزیشن');
            $table->string('post')->nullable(true)->comment('ملیت');
            $table->string('nationality')->nullable(false)->comment('ملیت');
            $table->boolean('bit')->default(0)->comment('کاپیتان');
            $table->integer('age')->nullable(true)->comment('سن');
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
        Schema::dropIfExists('members');
    }
}
