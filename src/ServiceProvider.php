<?php

namespace Leogopal\LaravelStartercrud;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class PackageServiceProvider
 *
 * @package Leogopal\LaravelStartercrud
 * @see http://laravel.com/docs/master/packages#service-providers
 * @see http://laravel.com/docs/master/providers
 */
class ServiceProvider extends BaseServiceProvider
{

    /**
     * Application is booting
     *
     * @see http://laravel.com/docs/master/providers#the-boot-method
     * @return void
     */
    public function boot()
    {

        $this->commands('Leogopal\LaravelStartercrud\Console\Commands\LGCrud');
        $this->commands('Leogopal\LaravelStartercrud\Console\Commands\L5GStub');
    }

}
