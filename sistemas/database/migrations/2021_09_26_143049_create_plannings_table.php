<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plannings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('briefcase_id');
            $table->string('project');
            $table->tinyText('detail');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('state');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('briefcase_id')->references('id')->on('briefcases');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plannings');
    }
}
