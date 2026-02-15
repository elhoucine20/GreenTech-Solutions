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
        //
            Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->enum('role',['admin','client','user']);
            $table->foreignId('role_id')->constrained()->cascadeOnDelete();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        // Schema::dropIfExists('users','role');
            Schema::table('utilisateurs', function (Blueprint $table) {

                $table->dropColumn('role_id');
           });
    }
};
