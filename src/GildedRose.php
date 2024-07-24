<?php
declare(strict_types=1);
namespace GildedRose;
final class GildedRose
{
    /**
     * @param Item[] $items
     */
    public function __construct( private array $items ) { }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) { $this-> updateFunction($item); } 
    }
    
    private function updateFunction(Item $item): void
    {
        switch ($item->name) {
            case 'Aged Brie':
                if ($item->quality < 50) {
                    $item->quality++;
                }
                break;
            case 'Backstage passes to a TAFKAL80ETC concert':
                if ($item->quality < 50) {
                    $item->quality++;
                    if ($item->sellIn < 11) {
                        if ($item->quality < 50) {
                            $item->quality++;
                        }
                    }
                    if ($item->sellIn < 6) {
                        if ($item->quality < 50) {
                            $item->quality++;
                        }
                    }
                }
                break;
            case 'Sulfuras, Hand of Ragnaros':
                break;
            default:
                if ($item->quality > 0) {
                    $item->quality--;
                }
                break;
        }
        if ($item->name !== 'Sulfuras, Hand of Ragnaros') {
            $item->sellIn--;
        }
        if ($item->sellIn < 0) {
            switch ($item->name) {
                case 'Aged Brie':
                    if ($item->quality < 50) {
                        $item->quality++;
                    }
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $item->quality = 0;
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    break;
                default:
                    if ($item->quality > 0) {
                        $item->quality--;
                    }
                    break;
            }
        }
    }   
 }

    