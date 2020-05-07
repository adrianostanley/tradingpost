<?php

require '../src/core/Activation.php';
require '../src/core/ActivationQueries.php';

require '../src/domain/Entity.php';
require '../src/domain/Order.php';
require '../src/domain/Player.php';
require '../src/domain/Tradable.php';

require '../src/repository/DatabaseProvider.php';
require '../src/repository/Repository.php';
require '../src/repository/TradableRepository.php';

use TradingPost\Repository\DatabaseProvider;

final class MockDatabaseProvider implements DatabaseProvider {
    
    public $tables = array();
    
    public function getResults(string $sql) : array {
        if ('SELECT * FROM mockdb_tradable' == $sql) {
            return [
                (object) ['tradableId' => '1', 'tradableName' => 'Consumable'],
                (object) ['tradableId' => '2', 'tradableName' => 'Crafting'],
                (object) ['tradableId' => '3', 'tradableName' => 'Dungeon run']
            ];
        }
        return [];
    }

    public function createTable(string $tableName, string $columns): void {
        // Just pretend the table was created in the database
        $this->tables[] = $tableName;
    }

    public function getDatabasePrefix(): string {
        return 'mockdb';
    }

}