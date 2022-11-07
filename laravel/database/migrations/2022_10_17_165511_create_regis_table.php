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
        Schema::create('regis', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('tmptlahir')->nullable();
            $table->string('tgllahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('almtasal')->nullable();
            $table->string('asalsklh')->nullable();
            $table->string('noijazah')->unique();
            $table->string('almtasalsklh')->nullable();
            $table->string('nmayah')->nullable();
            $table->string('pkrjayah')->nullable();
            $table->string('nmibu')->nullable();
            $table->string('pkrjibu')->nullable();
            $table->string('almtortu')->nullable();
            $table->string('bidang')->nullable();
            $table->string('foto')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('kk')->nullable();
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
        Schema::dropIfExists('regis');
    }
};
