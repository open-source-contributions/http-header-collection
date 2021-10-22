<?php declare(strict_types=1);

/**
 * It's free open-source software released under the MIT License.
 *
 * @author Anatoly Fenric <anatoly@fenric.ru>
 * @copyright Copyright (c) 2019, Anatoly Fenric
 * @license https://github.com/sunrise-php/http-header-collection/blob/master/LICENSE
 * @link https://github.com/sunrise-php/http-header-collection
 */

namespace Sunrise\Http\Header;

/**
 * Import classes
 */
use Countable;

/**
 * HeaderCollectionInterface
 */
interface HeaderCollectionInterface extends Countable
{

    /**
     * Adds the given header to the collection
     *
     * @param HeaderInterface $header
     *
     * @return void
     */
    public function add(HeaderInterface $header) : void;

    /**
     * Gets all headers from the collection
     *
     * @return array<HeaderInterface>
     */
    public function all() : array;
}
