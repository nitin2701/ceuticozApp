<?php
namespace App\Providers;
use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
class CollectionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Collection::macro('clear', function () {
            return [];
        });
        Collection::macro('recollect', function ($items) {
            return collect($items);
        });
    }

}
