<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TradingPost\Domain\Tradable;

final class TradableTest extends TestCase {

    public function testGetClass() : void {
        $this->assertSame('TradingPost\Domain\Tradable', (new Tradable())->getClass());
    }

    public function testSetPropertiesFromObject() : void {
        $object = (object) ['tradableId' => '1', 'tradableName' => 'Consumable'];
        
        $tradable = new Tradable();
        $tradable->setPropertiesFromObject($object);
        
        $this->assertSame('Consumable', $tradable->getName());
    }

}
