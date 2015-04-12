<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\InternalServerError;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\InternalServerError
 */
class InternalServerErrorTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 500;
    public $statusMessage = 'Internal Server Error';
    public $link = 'https://github.com/ahinko/phapi';
    public $code = 10;
    public $description = 'An internal server error occurred. Please try again within a few minutes. The error has been logged and we have been notified about the problem and we will fix it as soon as possible.';
    public $message = 'An unexpected error occurred.';

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new InternalServerError($this->message, $this->code, null, $this->link);
    }

    use exceptionTests;
}