<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('iso_product_id');
            $table->unsignedInteger('agency_id');
            $table->string('tender_no')->nullable();
            $table->string('tender_amount')->nullable();
            $table->date('tender_date')->nullable();
            $table->string('order_no');
            $table->string('order_amount');
            $table->date('order_date');
            $table->string('reference')->nullable();
            $table->string('project_lead');
            $table->date('start_plnd_dt');
            $table->date('start_actual_dt');
            $table->date('gap_assessment');
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('iso_product_id')->references('id')->on('products');
            $table->foreign('agency_id')->references('id')->on('agencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_managements');
    }
}
