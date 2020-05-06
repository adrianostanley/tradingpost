<?php

declare(strict_types=1);

namespace TradingPost\Domain;

/**
 * Entity can be anything in the context of TradingPost.
 *
 * @author Adriano
 */
abstract class Entity {

    /**
     * This function must implement a way to a mixed object - like those ones
     * returned by database queries - fill this instance properties.
     */
    public abstract function setPropertiesFromObject(Object $object): void;
}
