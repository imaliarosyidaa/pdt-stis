<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createDonationsTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->mediumIncrements('id');
            // $table->foreignId('user_id')->constrained();
            $table->integer('nominal')->unsigned();
            $table->string('link');
            $table->string('pesan',500)->nullable();
            $table->string('nama',500)->nullable()->default('Anonymous');
            $table->string('metode');
            $table->enum('status', ['belum dikonfirmasi', 'diterima', 'ditolak'])->default('belum dikonfirmasi');
            $table->unsignedBigInteger('event_pdt_id')->nullable();
            $table->foreign('event_pdt_id')->references('id')->on('event_pdts');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->dropForeign(['event_pdt_id']);
            $table->dropColumn('event_pdt_id');
        });
    }
};
