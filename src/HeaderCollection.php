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
 * Import functions
 */
use function count;

/**
 * HeaderCollection
 */
class HeaderCollection implements HeaderCollectionInterface
{

    /**
     * The collection headers
     *
     * @var array<HeaderInterface>
     */
    protected $headers = [];

    /**
     * Constructor of the class
     *
     * @param iterable<HeaderInterface> $headers
     */
    public function __construct(iterable $headers = [])
    {
        foreach ($headers as $header) {
            $this->add($header);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function add(HeaderInterface $header) : void
    {
        $this->headers[] = $header;
    }

    /**
     * {@inheritdoc}
     */
    public function all() : array
    {
        return $this->headers;
    }

    /**
     * Gets the number of headers in the collection
     *
     * @return int
     */
    public function count() : int
    {
        return count($this->headers);
    }
}
