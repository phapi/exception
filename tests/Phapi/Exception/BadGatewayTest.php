<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\BadGateway;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\BadGateway
 */
class BadGatewayTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 502;
    public $statusMessage = 'Bad Gateway';
    public $link = null;
    public $code = null;
    public $description = 'The API is down or being upgraded.';
    public $message = 'Upgrade in progress';

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new BadGateway($this->message);
    }

    use exceptionTests;
}