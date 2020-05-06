<?php

declare(strict_types=1);

namespace TradingPost\Repository;

/**
 *
 * @author Adriano
 */
abstract class Repository {
    
    private DatabaseProvider $provider;
    
    public function __construct(DatabaseProvider $provider) {
        $this->provider = $provider;
    }

    /**
     * This function must provide the entity table name.
     */
    protected abstract function getTableName() : String;
    
    public function listAll() : Array {
        $results = $this->provider->getResults($this->buildListAllQuery());
        
        if (empty($resuls)) {
            return [];
        }
    }
    
    /**
     * Builds the most generic SQL string to select all of entities represented
     * by this repository.
     * 
     * This function may be overrided if a simple SELECT * FROM is not enough
     * for an entity.
     * 
     * @return \String
     */
    protected function buildListAllQuery() : String {
        return sprintf('SELECT * FROM %s', $this->getTableName());
    }
}
