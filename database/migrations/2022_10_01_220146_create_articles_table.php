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
        Schema::create('articles', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->id();
            $table->string('title', 255)->nullable('false')->unique();
            $table->string('slug', 255)->nullable();//Setting slug on controller anyway...
            $table->longText('content')->nullable('false');
            // $table->foreignId('author_id')->constrained()->onDelete('cascade'); Not needed for this test i understood
            $table->string('author', 255)->nullable('false');
            $table->datetime('publish_date')->nullable();
            $table->boolean('draft_status')->default(1);
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
        Schema::dropIfExists('articles');
    }
};
