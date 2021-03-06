<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Request Timeout
 *
 * Response code 408
 *
 * The request timed out.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class RequestTimeout extends Exception
{

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 408;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Request Timeout';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'The request timed out.';
}
