<?php

declare(strict_types=1);

namespace TradingPost\Repository;

use TradingPost\Domain\Tradable;

/**
 *
 * @author Adriano
 */
class TradableRepository extends Repository {

    protected function getEntityClass(): string {
        return get_class(new Tradable());
    }
    
    protected function getTableName(): string {
        return 'tradable';
    }

}
