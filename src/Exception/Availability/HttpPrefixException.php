<?php

namespace HansAdema\MofhClient\Exception\Availability;

use HansAdema\MofhClient\Exception\ApiException;

/**
 * Exception thrown if the domain has the http:// prefix
 *
 * @package HansAdema\MofhClient\Exception\Availability
 */
class HttpPrefixException extends ApiException
{

}