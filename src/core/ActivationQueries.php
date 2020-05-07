<?php

declare(strict_types=1);

namespace TradingPost\Core;

/**
 * This is the main script of the plugin activation.
 *
 * @author Adriano
 */
class ActivationQueries {

    public static $tradableTable = [
        'tableName' => 'tradable',
        'columns' => '
            id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
            tradable_name VARCHAR(55) NOT NULL,
            PRIMARY KEY (id),
            UNIQUE INDEX (tradable_name)
        '
    ];

}
