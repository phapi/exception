<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\Forbidden;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\Forbidden
 */
class ForbiddenTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 403;
    public $statusMessage = 'Forbidden';
    public $link = null;
    public $code = null;
    public $description = 'The request is understood, but it has been refused or access is not allowed. An accompanying error message will explain why.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new Forbidden();
    }

    use exceptionTests;
}