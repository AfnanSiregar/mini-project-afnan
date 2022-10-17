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
        Schema::create('tb_m_projects', function (Blueprint $table) {
            $table->increments('project_id');
            $table->string('project_name', 100);
            $table->string('client_id', 100);
            $table->date('project_start');
            $table->date('project_end');
            $table->string('project_status', 15);
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
        Schema::dropIfExists('tb_m_projects');
    }
};
