<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use TradingPost\Repository\Repository;
use TradingPost\Repository\DatabaseProvider;

final class RepositoryTest extends TestCase {

    public function testFooRepository() : void {
        $repository = new FooRepository(new MockDatabaseProvider());
        
        $this->assertEquals('SELECT * FROM foo', $repository->getListAllQuery());
    }
}

final class FooRepository extends Repository {
    
    protected function getTableName(): String {
        return 'foo';
    }
    
    public function getListAllQuery() {
        return $this->buildListAllQuery();
    }
}

final class MockDatabaseProvider implements DatabaseProvider {
    
    public function getResults(String $sql) {
        
    }
}