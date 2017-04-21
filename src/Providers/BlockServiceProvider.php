<?php

namespace WTG\Block\Providers;

use WTG\Block\Models\Block;
use Illuminate\Support\ServiceProvider;
use WTG\Block\Interfaces\BlockInterface;

/**
 * Block service provider
 *
 * @package     WTG\Block
 * @subpackage  Providers
 * @author      Thomas Wiringa <thomas.wiringa@gmail.com>
 */
class BlockServiceProvider extends ServiceProvider
{
    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlockInterface::class, Block::class);
    }
}
