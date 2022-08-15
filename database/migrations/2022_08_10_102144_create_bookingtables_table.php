<?php

use App\Models\Bartables;
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
        Schema::create('bookingtables', function (Blueprint $table) {
            $table->id();
            $table->integer('table_no');
            $table->foreignIdFor(Bartables::class);
            $table->date('booking_date');
            $table->time('booking_time');
            $table->string('booking_phone');
            $table->string('booking_staff');
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
        Schema::dropIfExists('bookingtables');
    }
};
