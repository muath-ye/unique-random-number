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
namespace Muathye\UniqueRandomNumber;
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
     * Generate Random Number
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            '*', function ($view) {
                $view->with('offers', 'good news');
            }
        );
    }

    /**
     * Generate Random Number
     *
     * @return void
     */
    public function register()
    {

        //* Register the service provider for the dependency.
        $this->app->make('Muathye\UniqueRandomNumber\Random');

        // * Create aliases for the dependency.
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Random', 'Muathye\\UniqueRandomNumber\\Random');
    }

}
