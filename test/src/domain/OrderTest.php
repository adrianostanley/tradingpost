<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TradingPost\Domain\Order;

final class OrderTest extends TestCase {

    public function testMaxPrice(): void {
        $tradable = new Order();
        $tradable->setPrice(PHP_INT_MAX);

        $this->assertEquals(9223372036854775807, $tradable->getPrice());
    }

}
