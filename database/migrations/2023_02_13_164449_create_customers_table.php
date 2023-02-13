<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * @return void
     */
    public function up():void
    {
        Schema::create(\App\Models\Customer::getTableName(), function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->string('img');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * @return void
     */
    public function down():void
    {
        Schema::dropIfExists(\App\Models\Customer::getTableName());
    }
};
