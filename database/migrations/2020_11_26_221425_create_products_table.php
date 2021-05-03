<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('excerpt');
            $table->text('description')->nullable();
            $table->string('fournisseur')->nullable();
            $table->string('seo_description')->nullable();
            $table->text('key_words')->nullable();
            $table->string('image')->nullable();
            $table->double('price');
            $table->double('old_price')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('inspired')->default(false);
            $table->boolean('is_active')->default(false);
            $table->bigInteger('popularity')->default(0);
            $table->integer('qte');
            $table->foreignId('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();

            $table->index(['name','featured','is_active','qte','brand_id','popularity']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('products', static function (Blueprint $table) {
            $table->dropForeign('products_brand_id_foreign');
        });
        Schema::dropIfExists('products');
    }
}
