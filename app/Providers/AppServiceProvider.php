<?php

namespace App\Providers;

use App\Models\brand;
use App\Models\category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
        $categories =  category::with(['brands' => function($q){
            $q->with('image');
        }])->get();
        $brands = brand::with('image')->get()->toArray();
        
        view()->share('categories', $categories);
        view()->share('brands', $brands);
    }
}
