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

    // getContents() is intentionally not re-declared here.
    // JsonStream::getContents() returns decoded JSON (mixed), which diverges from
    // StreamInterface::getContents(): string in PSR-7 v2. The #[\ReturnTypeWillChange]
    // attribute on the JsonStream class implementation suppresses the PHP 8 fatal.
}
