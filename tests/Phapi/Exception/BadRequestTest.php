<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\BadRequest;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\BadRequest
 */
class BadRequestTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 400;
    public $statusMessage = 'Bad Request';
    public $link = null;
    public $code = null;
    public $description = 'The request was invalid or cannot be otherwise served. An accompanying error message will explain further.';
    public $message = 'The request doesn\'t include the identifier header';

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new BadRequest($this->message);
    }

    use exceptionTests;
}