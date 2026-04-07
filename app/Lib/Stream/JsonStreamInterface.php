<?php
/**
 * Created by PhpStorm.
 * User: Exodus 4D
 * Date: 19.01.2019
 * Time: 05:16
 */

namespace Exodus4D\ESI\Lib\Stream;


use Psr\Http\Message\StreamInterface;

interface JsonStreamInterface extends StreamInterface {

    /**
     * Decode the stream body as JSON and return the parsed value.
     * This is separate from getContents() (which returns the raw string per PSR-7 v2)
     * because StreamInterface::getContents(): string cannot be overridden with a mixed
     * return type in PHP 8 — #[\ReturnTypeWillChange] only applies to PHP built-in interfaces.
     * @return mixed
     */
    public function decode(): mixed;
}
