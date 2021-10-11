<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateView3dTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_3d', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('playerid');
            $table->unsignedInteger('agentid');
            $table->char('currency',3);
            $table->decimal('bet',10,2)->nullable()->default(null);
            $table->decimal('win',10,2)->nullable()->default(null);
            $table->decimal('rake',10,2)->nullable()->default(null);
            $table->decimal('tournament',10,2)->nullable()->default(null);
            $table->decimal('net',10,2);
            $table->decimal('fin',10,2)->nullable()->default(null);
            $table->string('aams_ticket',40);
            $table->string('aams_table',40);
            $table->engine      = 'MyISAM';
            $table->charset     = 'utf8';
            $table->collation   = 'utf8_general_ci';
            $table->autoIncrementingStartingValues(10835);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
