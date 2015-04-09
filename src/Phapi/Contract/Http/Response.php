<?php
/**
 * This file is part of Phapi.
 *
 * See license.md for information about the license.
 */

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
 * @link     https://github.com/ahinko/phapi
 */
interface Response extends ResponseInterface {

	/**
	 * Get the unparsed/unserialized body. Returns
	 * an array with the content.
	 *
	 * @returns array
	 */
    public function getUnparsedBody();

    /**
     * Creates a new instance with an unparsed/unserialized body.
	 *
	 * @param array $body
     */
    public function withUnparsedBody(array $body);
    
}