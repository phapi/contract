<?php

namespace Phapi\Contract\Middleware;

use Phapi\Contract\Di\Container;

/**
 * Interface SerializerMiddleware
 *
 * Serializers must implement a method for registering supported
 * mime types.
 *
 * @category Phapi
 * @package  Phapi\Contract
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/contract
 */
interface SerializerMiddleware extends Middleware {

    /**
     * Set the dependency injection container.
     *
     * We need the container to be able to register the mime types
     * that the (de)serializer supports.
     *
     * @param Container $container
     */
	public function setContainer(Container $container);

    /**
     * Register the mime types that the (de)serializer supports.
     *
     * Use $this->container['acceptTypes'] for serializers
     * and $this->container['contentTypes'] for deserializers
     *
     * Example:
     * $this->container['acceptTypes'] = array_merge($this->container['acceptTypes'], $this->mimeTypes);
     */
	public function registerMimeTypes();

}