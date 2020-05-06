<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TradingPost\Domain\Category;
use TradingPost\Domain\Tradable;

final class TradableTest extends TestCase {

    public function testGetCategoryName(): void {
        $category = new Category();
        $category->setName('Consumable');

        $tradable = new Tradable();
        $tradable->setCategory($category);

        $this->assertEquals('Consumable', $tradable->getCategoryName());
    }

    public function testGetCategoryNameWithNoCategory(): void {
        $tradable = new Tradable();
        $this->assertEquals('Not available', $tradable->getCategoryName());
    }

}
