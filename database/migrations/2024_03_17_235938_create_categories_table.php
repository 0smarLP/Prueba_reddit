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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        /*-------------------------------- Insercion de datos default ------------------------------*/
            $category = new \App\Models\Category();
            $category->name = 'mexico';
            $category->save();

            $category = new \App\Models\Category();
            $category->name = 'colombia';
            $category->save();

            $category = new \App\Models\Category();
            $category->name = 'argentina';
            $category->save();

            $category = new \App\Models\Category();
            $category->name = 'chile';
            $category->save();

            $category = new \App\Models\Category();
            $category->name = 'peru';
            $category->save();

            $category = new \App\Models\Category();
            $category->name = 'ecuador';
            $category->save();

            $category = new \App\Models\Category();
            $category->name = 'venezuela';
            $category->save();
        /*------------------------------------------------------------------------*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
