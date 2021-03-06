<?php

namespace Phapi\Contract\Di;

use Phapi\Contract\Di\Validator;

/**
 * Interface Container
 *
 * An interface for the dependency injection container
 * used by Phapi.
 *
 * @category Phapi
 * @package  Phapi\Contract
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/contract
 */
interface Container extends \ArrayAccess
{

    /**
     * Add a validator that will validate during the binding
     * of a new value/closure.
     *
     * @param $key
     * @param Validator $validator
     */
    public function addValidator($key, Validator $validator);

    /**
     * Add/bind a value or object to the container
     *
     * @param string|int $key
     * @param mixed $value
     * @param int $type
     */
    public function bind($key, $value, $type);

    /**
     * Retrieve value or object from the container
     *
     * @param string|int $key
     * @return mixed
     */
    public function make($key);
}
