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
     * Returns the remaining contents as decoded JSON (mixed type, not a string)
     *
     * @return mixed
     * @throws \RuntimeException if unable to read or an error occurs while
     *     reading.
     */
    #[\ReturnTypeWillChange]
    public function getContents();
}