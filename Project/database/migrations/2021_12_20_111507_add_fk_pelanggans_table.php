<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelanggans', function(Blueprint $table){
            $table->unsignedBigInteger('Tour_id')->nullable()->after('nama');
            $table->foreign('Tour_id')->references('id')->on('Tourtravels');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelanggans', function(Blueprint $table){
            $table->string('Tujuan');
            $table->dropForeign(['Tujuan']);
        });
    }
}
