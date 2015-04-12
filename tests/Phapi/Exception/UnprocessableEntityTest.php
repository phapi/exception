<?php

namespace Phapi\Tests\Exception\Error;

use Phapi\Exception\UnprocessableEntity;
use Phapi\Tests\Exception\exceptionTests;

require_once __DIR__ . '/ExceptionTrait.php';

/**
 * @coversDefaultClass \Phapi\Exception\UnprocessableEntity
 */
class UnprocessableEntityTest extends \PHPUnit_Framework_TestCase
{

    public $statusCode = 422;
    public $statusMessage = 'Unprocessable Entity';
    public $link = null;
    public $code = null;
    public $description = 'Returned when an uploaded file is unable to be processed.';
    public $message = null;

    /**
     * @covers ::__construct
     */
    public function testConstructor()
    {
        return new UnprocessableEntity();
    }

    use exceptionTests;
}