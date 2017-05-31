<?php

namespace WTG\Content\Providers;

use WTG\Content\Models\Content;
use Illuminate\Support\ServiceProvider;
use WTG\Content\Interfaces\ContentInterface;

/**
 * Content service provider
 *
 * @package     WTG\Content
 * @subpackage  Providers
 * @author      Thomas Wiringa <thomas.wiringa@gmail.com>
 */
class ContentServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');

        $this->loadRoutesFrom(__DIR__.'/../routes.php');

        $this->loadViewsFrom(__DIR__.'/../Resources/views', 'content');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ContentInterface::class, Content::class);
    }
}
