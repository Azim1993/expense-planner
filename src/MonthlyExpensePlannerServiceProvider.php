<?php
namespace Azim1993\ExpensePlanner;

use Illuminate\Support\ServiceProvider;

class MonthlyExpensePlannerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register(): void
    {

    }
}
