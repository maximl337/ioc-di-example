<?php

namespace App\Providers;

use App\Tag;
use Google\PhPApi;
use App\Contracts\TagsInterface;
use App\Repositories\TagsRepository;
use Illuminate\Support\ServiceProvider;

class TagsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $app->bind(TagsInterface::class, fuction() {
            return new TagsRepository(new PhPApi($key, $secret));
        })
    }
}
