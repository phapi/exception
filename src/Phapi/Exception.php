<?php


namespace Phapi;

/**
 * Class Exception
 *
 * @category Phapi
 * @package  Phapi\Exception
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/exception
 */
class Exception extends \Exception
{

    /**
     * Response status code
     *
     * @var int
     */
    protected $statusCode = null;

    /**
     * Response status message
     *
     * @var string
     */
    protected $statusMessage = null;

    /**
     * Link to more information
     *
     * @var null|string
     */
    protected $link;

    /**
     * Error description
     *
     * @var null|string
     */
    protected $description;

    public function __construct(
        $message = null,
        $code = null,
        \Exception $previous = null,
        $link = null,
        $description = null
    ) {
        // Do not overwrite predefined values with null
        $this->link         = (is_null($link))          ? $this->link       : $link;
        $this->description  = (is_null($description))   ? $this->description: $description;

        $message            = (is_null($message))       ? $this->message    : $message;
        $code               = (is_null($code))          ? $this->code       : $code;

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    /**
     * Get link to documentation
     *
     * @return null|string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Get error description
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get status code
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Get status message
     *
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }
}
