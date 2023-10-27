<?php

namespace App\ApiResource;

use Traversable;

class ContentItemCollection implements \IteratorAggregate
{
    private array $items;
    public function __construct(ContentItemInterface ...$items)
    {
        $this->items = $items;
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->items);
    }
}
