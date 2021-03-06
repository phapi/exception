<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Not Implemented
 *
 * Response code 501
 *
 * The requested method is not implemented.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class NotImplemented extends Exception
{

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 501;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Not Implemented';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'The requested method is not implemented.';
}
