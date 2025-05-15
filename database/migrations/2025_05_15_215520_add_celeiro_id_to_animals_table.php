<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->integer('celeiro_id')->nullable();
            $table->foreign('celeiro_id')->references('id')->on('celeiros')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropForeign(['celeiro_id']);
            $table->dropColumn('celeiro_id');
        });
    }
};
