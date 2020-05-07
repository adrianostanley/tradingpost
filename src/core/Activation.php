<?php

declare(strict_types=1);

namespace TradingPost\Core;

use TradingPost\Core\ActivationQueries;
use TradingPost\Repository\DatabaseProvider;

/**
 * This is the main script of the plugin activation.
 *
 * @author Adriano
 */
class Activation {
    
    private DatabaseProvider $databaseProvider;
    
    public function __construct(DatabaseProvider $databaseProvider) {
        $this->databaseProvider = $databaseProvider;
    }

    /**
     * Activate the plugin by running all the required scripts to set it up and
     * make it ready to be used.
     * 
     * @return void
     */
    public function activatePlugin() : void {
        $this->databaseProvider->createTable(ActivationQueries::$tradableTable['tableName'], ActivationQueries::$tradableTable['columns']);
    }
}
