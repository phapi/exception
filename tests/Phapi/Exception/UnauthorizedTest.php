<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\Unauthorized;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\Unauthorized
 */
class UnauthorizedTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 401;
    public $statusMessage = 'Unauthorized';
    public $link = null;
    public $code = null;
    public $description = 'Authentication credentials were missing or incorrect.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new Unauthorized();
    }

    use exceptionTests;
}