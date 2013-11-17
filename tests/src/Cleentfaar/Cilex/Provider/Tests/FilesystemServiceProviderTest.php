<?php

namespace Cleentfaar\Cilex\Provider\Tests;

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
