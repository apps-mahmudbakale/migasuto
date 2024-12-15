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
        Schema::create('fractional_c_f_o_s', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('country');
            $table->text('inspiration');
            $table->text('product');
            $table->text('solution');
            $table->text('advantage');
            $table->text('envision');
            $table->text('goals');
            $table->text('business_model');
            $table->text('revenue_stream');
            $table->text('pricing');
            $table->text('startup_cost');
            $table->text('expenditure');
            $table->text('profitability');
            $table->text('capital');
            $table->string('investor');
            $table->string('self_funding');
            $table->text('capital_invest');
            $table->text('capital_raised')->nullable(); // Handle duplicate gracefully
            $table->text('projected_needs');
            $table->string('hiring');
            $table->text('job_hire');
            $table->text('sale_target');
            $table->text('marketing');
            $table->text('risk');
            $table->text('compliance_concern');
            $table->text('financial_metrics');
            $table->text('cash_flow_time');
            $table->string('bank_statement')->nullable(); // File path
            $table->string('cash_flow_statement')->nullable(); // File path
            $table->string('budget_document')->nullable(); // File path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fractional_c_f_o_s');
    }
};
