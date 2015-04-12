<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\NotAcceptable;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\NotAcceptable
 */
class NotAcceptableTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 406;
    public $statusMessage = 'Not Acceptable';
    public $link = null;
    public $code = null;
    public $description = 'Returned by the API when an invalid format is specified in the request.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new NotAcceptable();
    }

    use exceptionTests;
}