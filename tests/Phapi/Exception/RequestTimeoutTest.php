<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\RequestTimeout;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\RequestTimeout
 */
class RequestTimeoutTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 408;
    public $statusMessage = 'Request Timeout';
    public $link = null;
    public $code = null;
    public $description = 'The request timed out.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new RequestTimeout();
    }

    use exceptionTests;
}