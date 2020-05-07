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

    protected abstract function getEntityClass() : string;
    
    /**
     * This function must provide the entity table name.
     */
    protected abstract function getTableName() : string;
    
    public function listAll() : Array {
        $results = $this->provider->getResults($this->buildListAllQuery());
        
        $entities = [];

        foreach($results as $object) {
            $entityClass = $this->getEntityClass();
            
            /** @var \TradingPost\Domain\Entity $entity */
            $entity = new $entityClass();
            
            $entity->setPropertiesFromObject($object);
            
            $entities[] = $entity;
        }
        
        return $entities;
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
        return sprintf('SELECT * FROM %s_%s', $this->provider->getDatabasePrefix(), $this->getTableName());
    }
}
