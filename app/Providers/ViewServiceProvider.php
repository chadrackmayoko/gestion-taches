<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{

     public function boot()
    {
        // Partager l'utilisateur connecté avec toutes les vues
        View::composer('*', function ($view) {
            $view->with('user', Auth::user());
        });
    }
}
