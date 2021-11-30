<?php

declare(strict_types=1);

namespace Sunrise\Http\Header\Tests;

use PHPUnit\Framework\TestCase;
use Sunrise\Http\Header\HeaderCollection;
use Sunrise\Http\Header\HeaderCollectionInterface;
use Sunrise\Http\Header\HeaderInterface;

class HeaderCollectionTest extends TestCase
{
    public function testContracts() : void
    {
        $collection = new HeaderCollection();

        $this->assertInstanceOf(HeaderCollectionInterface::class, $collection);
    }

    public function testConstructor() : void
    {
        $headers = [
            $this->createMock(HeaderInterface::class),
            $this->createMock(HeaderInterface::class),
            $this->createMock(HeaderInterface::class),
        ];

        $collection = new HeaderCollection($headers);

        $this->assertSame($headers, $collection->all());
    }

    public function testAdd() : void
    {
        $headers = [
            $this->createMock(HeaderInterface::class),
            $this->createMock(HeaderInterface::class),
            $this->createMock(HeaderInterface::class),
        ];

        $collection = new HeaderCollection();

        $collection->add($headers[0]);
        $collection->add($headers[1]);
        $collection->add($headers[2]);

        $this->assertSame($headers, $collection->all());
    }

    public function testCount() : void
    {
        $headers = [
            $this->createMock(HeaderInterface::class),
            $this->createMock(HeaderInterface::class),
            $this->createMock(HeaderInterface::class),
        ];

        $collection = new HeaderCollection();

        $this->assertCount(0, $collection);

        $collection->add($headers[0]);
        $collection->add($headers[1]);
        $collection->add($headers[2]);

        $this->assertCount(3, $collection);
    }
}
