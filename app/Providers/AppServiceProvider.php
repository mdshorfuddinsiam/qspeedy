<?php

namespace App\Providers;

use App\Models\Footergridtwo;
use App\Models\Generalsetting;
use App\Models\Sociallink;
use App\Models\Service;
use App\Models\Area;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
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
        // View::composer(['dashboard', 'frontend.profile.user_profile', 'frontend.profile.change_password'], function($view){
        //     $view->with('user', Auth::user());
        // });

        View::composer(['frontend.inc.header', 'frontend.inc.footer', 'frontend.layouts.master', 'backend.inc.header', 'backend.layouts.admin_master', 'backend.inc.sidebar', 'auth.login'], function($view){
            $view->with('generalsetting', Generalsetting::latest()->first());
        });
        View::composer(['frontend.inc.header', 'frontend.inc.footer'], function($view){
            $view->with('services', Service::whereStatus(1)->latest()->get());
        });
        View::composer(['frontend.inc.header'], function($view){
            $view->with('areas', Area::whereStatus(1)->orderBy('name', 'asc')->get());
        });
        View::composer(['frontend.inc.footer'], function($view){
            $view->with('footergridtwos', Footergridtwo::whereStatus(1)->get());
        });
        View::composer(['frontend.inc.social', 'frontend.inc.footer'], function($view){
            $view->with('sociallink', Sociallink::latest()->first());
        });

    }
}
