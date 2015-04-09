<?php
/**
 * This file is part of Phapi.
 *
 * See license.md for information about the license.
 */

namespace Phapi\Contract\Http;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Interface Request
 *
 * Extends PSR-7 ServerRequestInterface with a few extra methods.
 *
 * @category Phapi
 * @package  Phapi\Contract
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/ahinko/phapi
 */
interface Request extends ServerRequestInterface {

	/**
	 * Check if the request method is the same as the provided method.
	 *
	 * @param string $method
	 */
    public function isMethod($method);

}