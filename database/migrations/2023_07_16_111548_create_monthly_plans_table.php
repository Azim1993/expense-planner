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
        Schema::create('monthly_plans', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('plan_month');
            $table->smallInteger('plan_year');
            $table->float('income_amount')->default(0);
            $table->float('targeted_expense_amount')->default(0);
            $table->float('targeted_investment_amount')->default(0);
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_plans');
    }
};
