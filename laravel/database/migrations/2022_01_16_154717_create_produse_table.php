<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Produse', function (Blueprint $table) {
            $table->id();
            $table->string( 'produs_nume');
            $table->decimal( 'produs_pret', 13, 2);
            $table->string( 'produs_img');
            $table->string( 'produs_descriere');
            $table->string( 'produs_descrierecompl');
            $table->string( 'produs_stare');
            $table->tinyInteger( 'produs_oferta');
            $table->tinyInteger( 'produs_noutati');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produse');
    }
}
