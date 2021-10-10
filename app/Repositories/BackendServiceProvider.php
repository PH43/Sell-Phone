<?php 
namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\ProductRepositoryInterface',
            'App\Repositories\ProductRepository',
         
        );

        $this->app->bind(
    
            'App\Repositories\CommentRepositoryInterface',
            'App\Repositories\CommentRepository',
        );

        $this->app->bind(
    
            'App\Repositories\HomeRepositoryInterface',
            'App\Repositories\HomeRepository',
        );

        $this->app->bind(
    
            'App\Repositories\CartRepositoryInterface',
            'App\Repositories\CartRepository',
        );

        $this->app->bind(
    
            'App\Repositories\OrderRepositoryInterface',
            'App\Repositories\OrderRepository',
        );

        $this->app->bind(
    
            'App\Repositories\AddressRepositoryInterface',
            'App\Repositories\AddressRepository',
        );
    }
}
?>