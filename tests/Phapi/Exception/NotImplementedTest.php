<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\NotImplemented;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\NotImplemented
 */
class NotImplementedTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 501;
    public $statusMessage = 'Not Implemented';
    public $link = null;
    public $code = null;
    public $description = 'The requested method is not implemented.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new NotImplemented();
    }

    use exceptionTests;
}