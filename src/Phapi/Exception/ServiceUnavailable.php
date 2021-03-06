<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Service Unavailable
 *
 * Response code 503
 *
 * The API is up, but overloaded with requests. Try again later.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class ServiceUnavailable extends Exception
{

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 503;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Service Unavailable';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'The API is up, but overloaded with requests. Try again later.';
}
