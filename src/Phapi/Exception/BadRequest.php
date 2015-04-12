<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Bad Request
 *
 * Response code 400
 *
 * The request was invalid or cannot be otherwise served. An accompanying
 * error message will explain further.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class BadRequest extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 400;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Bad Request';

    /**
     * Error message
     *
     * @var string
     */
    protected $description =
        'The request was invalid or cannot be otherwise served. An accompanying error message will explain further.';
}