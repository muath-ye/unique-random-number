<?php
/**
 * Service Provider
 * php version 7.3.1
 *
 * @category Package
 * @package  UniqueRandomNumber
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     Muathye https://www.github.com/muath-ye
 */
namespace Muathye\UniqueRandomNumber\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
/**
 * Service Provider
 * php version 7.3.1
 *
 * @category Package
 * @package  UniqueRandomNumber
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     Muathye https://www.github.com/muath-ye
 */
class MuathyeServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //TODO: not working, so the user needs to register this alias.
        $this->app->alias('Random', 'Muathye\UniqueRandomNumber\Random');
    }

}
