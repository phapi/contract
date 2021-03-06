<?php

namespace Phapi\Contract\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Interface Response
 *
 * Extends PSR-7 ResponseInterface with a few extra methods.
 *
 * @category Phapi
 * @package  Phapi\Contract
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/contract
 */
interface Response extends ResponseInterface
{

    /**
	 * Get the unserialized body. Returns
	 * an array with the content.
	 *
	 * @returns array
	 */
    public function getUnserializedBody();

    /**
     * Creates a new instance with an unserialized body.
	 *
	 * @param array $body
     */
    public function withUnserializedBody(array $body);
}
