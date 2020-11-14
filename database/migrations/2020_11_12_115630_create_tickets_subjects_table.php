<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsSubjectsTable extends \Illuminate\Database\Migrations\Migration
{
    public function up()
    {
        Schema::create("tickets_subjects", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description")->nullable();
            $table->unsignedInteger("department_id");
            $table->integer("priority")->default(1);
        });
    }

    public function drop()
    {
        Schema::dropIfExists("tickets_subjects");
    }
}