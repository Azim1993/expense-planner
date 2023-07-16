<?php
namespace Azim1993\ExpensePlanner;

use Illuminate\Support\ServiceProvider;

class MonthlyExpensePlannerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadViewsFrom(__DIR__. '/../resources/views', 'planner');
    }

    public function register(): void
    {

    }
}
