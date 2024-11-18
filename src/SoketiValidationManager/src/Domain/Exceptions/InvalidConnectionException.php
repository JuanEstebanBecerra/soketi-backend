<?php

namespace SoketiValidationManager\Domain\Exceptions;

use Exception;

class InvalidConnectionException extends Exception
{
    /**
     * @var int
     */
    protected $code = 200;

    /**
     * @var string
     */
    protected $message = 'Connection failed';
}
