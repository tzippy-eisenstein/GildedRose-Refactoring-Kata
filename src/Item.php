<?php
declare(strict_types=1);
namespace GildedRose;
class Item implements \Stringable
{
    public function __construct(
        public string $name,
        public int $sellIn,
        public int $quality
    ) {}
    
    public function __toString(): string
    {
        return sprintf('%s, %d, %d', $this->name, $this->sellIn, $this->quality);
    }
}