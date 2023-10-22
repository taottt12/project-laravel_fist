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
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->id();
            $table->string("TenNV");
            $table->unsignedBigInteger('MaVT');
            $table->foreign('MaVT')->references('MaVT')->on('vi_tri')->onDelete('cascade');
            $table->unsignedBigInteger('MaPB');
            $table->foreign('MaPB')->references('MaPB')->on('phong_ban')->onDelete('cascade');
            $table->string("Luong");
            $table->date("NgayVL");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_vien');
    }
};
