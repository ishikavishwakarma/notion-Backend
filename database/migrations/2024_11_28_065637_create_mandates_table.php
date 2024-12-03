<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mandates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->max(255); // Now required
            $table->string('email')->unique(); // Now required
            $table->string('address')->max(500); // Now required
            $table->date('date'); // Now required
            $table->string('mobile_number')->max(15); // Now required
            $table->string('signature_file'); // Path for the image file, now required
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mandates');
    }
};
