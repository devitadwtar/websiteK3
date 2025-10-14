<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('t_report_comments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('report_id')->constrained('t_reports')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('t_users')->onDelete('cascade');
            $table->text('comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('t_report_comments');
    }
};