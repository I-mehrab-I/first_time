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
        Schema::create('digital_contents', function (Blueprint $table) {
            
            
        $table->id();
        $table->unsignedBigInteger('digital_content_type_id')->nullable();
        $table->string("name");
        $table->text("description")->nullable();
        $table->string("image_url")->nullable();
        $table->string("content_url")->nullable();
        $table->decimal("price",10,2)->default(0);
        $table->decimal("discount",10,2)->default(0);
        $table->integer("status")->default(1);
        $table->timestamps();

        $table
        ->foreign("digital_content_type_id")
        ->references('id')
        ->on('digital_content_types')
        ->nullOnDelete()
        ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('digital_contents');
    }
};
