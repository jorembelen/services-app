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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->nullable()->constrained('users');
            $table->foreignId('category_id')->nullable()->constrained();
            $table->foreignId('sub_category_id')->nullable()->constrained();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price');
            $table->string('images')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('services');
    }
};
