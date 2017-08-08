<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class TestCodeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';
        if(Request::segment(1) == 'produk') {
            $halaman = 'produk';
        }
        if(Request::segment(1) == 'user') {
            $halaman = 'user';
        }
        if(Request::segment(1) == 'register') {
            $halaman = 'register';
        }
        if(Request::segment(1) == 'login') {
            $halaman = 'login';
        }
        view()->share('halaman', $halaman);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
