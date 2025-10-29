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
        Schema::create("subject",function(Blueprint $table){
            $table->id();
            $table->foreignId("student_id");
            $table->string("subject_name");
            $table->text("subject_desc");
            $table->string("subject_code");
            $table->double("subject_units");
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
        //
    }
};
