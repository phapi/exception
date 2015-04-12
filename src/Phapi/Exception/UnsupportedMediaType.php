<?php

namespace Phapi\Exception;

use Phapi\Exception;

/**
 * Class Unsupported Media Type
 *
 * Response code 415
 *
 * Media type not supported.
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class UnsupportedMediaType extends Exception {

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = 415;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = 'Unsupported Media Type';

    /**
     * Error message
     *
     * @var string
     */
    protected $description = 'Media type not supported.';
}