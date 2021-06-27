<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use function Symfony\Component\String\s;

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
        if (config('app.env') === 'production')
        {
            $this->app->bind('path.public', function() {
                return base_path().'/../../public_html';
            });
        }

        Schema::defaultStringLength(191);
        Blade::directive('price', function ($money) {
            return "<?php echo number_format($money, 2, '.', ' '); ?>";
        });
        Paginator::useBootstrap();
        View::composer(['admin.layouts.partials.sideBar'],\App\Http\Views\Composers\Admin\NewestOrderCount::class);

//        View::composer(['website.partials.featuredProducts'],\App\Http\Views\Composers\FeaturedProductComposer::class);
//        View::composer(['website.partials.inspiredProducts'],\App\Http\Views\Composers\InspiredProductComposer::class);
        View::composer(['layouts.partials.footer'],\App\Http\Views\Composers\CategoryComposer::class);
    }
}
