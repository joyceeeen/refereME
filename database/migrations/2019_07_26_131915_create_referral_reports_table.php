<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reports_references_id');
            $table->unsignedBigInteger('referrals_id');

            $table->foreign('reports_references_id')->references('id')->on('reports_references');
            $table->foreign('referrals_id')->references('id')->on('referrals');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referral_reports');
    }
}
