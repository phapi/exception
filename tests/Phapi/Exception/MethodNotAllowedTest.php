<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\MethodNotAllowed;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\MethodNotAllowed
 */
class MethodNotAllowedTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 405;
    public $statusMessage = 'Method Not Allowed';
    public $link = null;
    public $code = null;
    public $description = 'The requested method is not allowed.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new MethodNotAllowed();
    }

    use exceptionTests;
}