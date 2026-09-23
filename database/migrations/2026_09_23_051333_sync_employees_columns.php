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
    Schema::table('employees', function (Blueprint $table) {
        $table->renameColumn('place_of_birth', 'pob');
        $table->renameColumn('date_of_birth', 'dob');
    });
}

public function down(): void
{
    Schema::table('employees', function (Blueprint $table) {
        $table->renameColumn('pob', 'place_of_birth');
        $table->renameColumn('dob', 'date_of_birth');
    });
}
};
