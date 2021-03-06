<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\ServiceUnavailable;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\ServiceUnavailable
 */
class ServiceUnavailableTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 503;
    public $statusMessage = 'Service Unavailable';
    public $link = null;
    public $code = null;
    public $description = 'The API is up, but overloaded with requests. Try again later.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new ServiceUnavailable();
    }

    use exceptionTests;
}