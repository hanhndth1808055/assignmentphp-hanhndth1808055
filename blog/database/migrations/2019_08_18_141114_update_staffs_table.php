<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staffs', function (Blueprint $table) {
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->foreign('position_id')->references('position_id')->on('positions');
            $table->foreign('certification_id')->references('certification_id')->on('certification');
            $table->foreign('salary_id')->references('salary_id')->on('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staffs', function (Blueprint $table) {
            //
        });
    }
}
