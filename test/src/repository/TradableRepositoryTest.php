<?php

use PHPUnit\Framework\TestCase;
use TradingPost\Domain\Tradable;
use TradingPost\Repository\TradableRepository;

/**
 *
 * @author Adriano
 */
class TradableRepositoryTest extends TestCase {

    public function testSelectAllTradables() : void {
        $repository = new TradableRepository(new MockDatabaseProvider());
        
        $allTradables = $repository->listAll();
        
        $this->assertCount(3, $allTradables);
        
        /** @var Tradable $firstTradable */
        $firstTradable = $allTradables[0];
        $this->assertSame(1, $firstTradable->getId());
        $this->assertSame('Consumable', $firstTradable->getName());
    }

}
