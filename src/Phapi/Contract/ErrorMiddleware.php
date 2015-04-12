<?php

namespace Phapi\Contract;

/**
 * Interface ErrorMiddleware
 *
 * The ErrorMiddleware interface is used by the pipeline to determine
 * when the error handler has been registered. Error middleware interface
 * extends the normal middleware interface to get the same instructions.
 *
 * Middleware accepts a request and a response and optionally a callback
 * ($next) that is called if the middleware allows further middleware to
 * process the request.
 *
 * If a middleware doesn't need or desire to allow further processing it
 * should not call the callback ($next) and should instead return a response.
 *
 * @category Phapi
 * @package  Phapi\Contract
 * @author   Peter Ahinko <peter@ahinko.se>
 * @license  MIT (http://opensource.org/licenses/MIT)
 * @link     https://github.com/phapi/contract
 */
interface ErrorMiddleware extends Middleware {

}