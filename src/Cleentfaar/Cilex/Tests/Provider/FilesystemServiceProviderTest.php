<?php

/*
 * This file is part of Filesystem Service Provider.
 *
 * (c) 2013 Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cleentfaar\Cilex\Tests\Provider;

use Cleentfaar\Cilex\Provider\FilesystemServiceProvider;
use Cilex\Application;

class FilesystemServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testRegister()
    {
        $app = new Application('Test');
        $app->register(new FilesystemServiceProvider());

        $this->assertInstanceOf('Symfony\\Component\\Filesystem\\Filesystem', $app['filesystem']);
    }
}
