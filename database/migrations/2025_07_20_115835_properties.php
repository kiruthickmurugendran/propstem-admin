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
        schema::create ('properties', function(Blueprint $table) {
            $table ->bigIncrements('id');
            $table ->string('name');
            $table ->string('address');
            $table ->string('location', 25);
            $table ->string('city', 25);
            $table ->string('district', 25);
            $table ->string('state', 25);
            $table ->string('latitude');
            $table ->string('longitude');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
