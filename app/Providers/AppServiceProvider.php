<?php

namespace App\Providers;

use App\Models\Category;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        
        if(Schema::hasTable('categories')){ // Il metodo hasTable si interroga sull'esisitenza di uan specifica tabella
            View::share('categories', Category::all()); // Stiamo rendnedo disponibile le categorie a tutte le viste
        }

      

    }
}
