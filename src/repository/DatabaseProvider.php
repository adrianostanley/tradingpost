<?php

declare(strict_types=1);

namespace TradingPost\Repository;

/**
 * A database provider must deliver a connection to a database or any other kind
 * of storage to persist entities.
 * 
 * @author Adriano
 */
interface DatabaseProvider {
    
    public function getResults(String $sql);
}
