<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\PaymentRequired;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\PaymentRequired
 */
class PaymentRequiredTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 402;
    public $statusMessage = 'Payment Required';
    public $link = null;
    public $code = null;
    public $description = 'Payment is required before the requested method/resource can be requested.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new PaymentRequired();
    }

    use exceptionTests;
}