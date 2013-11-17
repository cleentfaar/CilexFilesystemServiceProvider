<?php

/*
 * This file is part of Filesystem Service Provider.
 *
 * (c) 2013 Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cleentfaar\Cilex\Provider;

use Cilex\Application;
use Cilex\ServiceProviderInterface;
use Symfony\Component\Filesystem\Filesystem;

class FilesystemServiceProvider implements ServiceProviderInterface
{

    public function register(Application $app)
    {
        $app['filesystem'] = $app->share(function(Application $app) {
            return new Filesystem();
        });
    }

    public function boot(Application $app)
    {
    }
}
