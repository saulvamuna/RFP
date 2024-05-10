<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->id();
            $table->string('type_RP');
            $table->string('type_SS');
            $table->string('type_CO');
            $table->string('type_RC')->nullable();
            $table->string('suggested_suppliers');
            $table->string('requirements_sst');
            $table->string('which_requires');
            $table->string('as_required');
            $table->string('for_requires');
            $table->string('when_required');
            $table->date('acceptability_date')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_process');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_process')->references('id')->on('processes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petitions');
    }
};
