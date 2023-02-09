<?php

namespace App\Providers;

use App\Http\ViewComposers\SkillsViewComposer;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        View::composer('welcome', SkillsViewComposer::class);
    }
}
