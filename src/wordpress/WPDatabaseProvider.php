<?php

declare(strict_types=1);

namespace TradingPost\WordPress;

use TradingPost\Repository\DatabaseProvider;

/**
 * This is the WordPress implementation of a database provider and must be used
 * by the plugin running on the released environment.
 *
 * @author Adriano
 */
class WPDatabaseProvider implements DatabaseProvider {
    
    public function createTable(string $tableName, string $columns): void {
        
    }

    public function getDatabasePrefix(): string {
        return 'wowtp';
    }

    public function getResults(string $sql): array {
        
    }

}
