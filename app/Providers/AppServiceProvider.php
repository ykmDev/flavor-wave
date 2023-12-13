<?php

namespace App\Providers;

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;

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
    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
        Schema::defaultStringLength(191);

        // Collection::macro('paginate', function ($perPage, $total = null, $page = null, $pageName = 'page') {
        //     $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

        //     return new LengthAwarePaginator(
        //         $this->forPage($page, $perPage),
        //         $total ?: $this->count(),
        //         $perPage,
        //         $page,
        //         [
        //             'path' => LengthAwarePaginator::resolveCurrentPath(),
        //             'pageName' => $pageName,
        //         ]
        //     );
        // });

        Paginator::useTailwind();
    }
}
