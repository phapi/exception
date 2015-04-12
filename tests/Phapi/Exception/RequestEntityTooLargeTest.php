<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\RequestEntityTooLarge;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\RequestEntityTooLarge
 */
class RequestEntityTooLargeTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 413;
    public $statusMessage = 'Request Entity Too Large';
    public $link = null;
    public $code = null;
    public $description = 'The requested entity is too large.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new RequestEntityTooLarge();
    }

    use exceptionTests;
}