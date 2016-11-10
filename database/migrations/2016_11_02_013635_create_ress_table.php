<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ress', function (Blueprint $table) {
            $table->integer('ress_id')->unsigned();
            $table->integer("thread_id")->unsigned();
            $table->foreign("thread_id")->references("id")->on("threads");
            $table->integer("member_id")->unsigned();
            $table->foreign("member_id")->references("id")->on("members");
            $table->string("title");
            $table->text("body");
            $table->primary(["ress_id","thread_id"]);
            $table->string("active",15);
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
        Schema::drop('ress');
    }
}
