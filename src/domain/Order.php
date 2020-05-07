<?php

declare(strict_types=1);

namespace TradingPost\Domain;

/**
 * An order can be a "want to buy" or a "want to sell" order.
 *
 * @author Adriano
 */
class Order extends Entity {

    private DateTime $createDate;
    private int $id;
    private String $description;
    private Player $player;
    private int $price;
    private Tradable $tradable;
    private String $title;

    public function getCreateDate(): DateTime {
        return $this->createDate;
    }
    
    public function getId(): int {
        return $this->id;
    }

    public function getDescription(): String {
        return $this->description;
    }

    public function getPlayer(): Player {
        return $this->player;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getTradable(): Tradable {
        return $this->tradable;
    }

    public function getTitle(): String {
        return $this->title;
    }

    public function setCreateDate(DateTime $createDate): void {
        $this->createDate = $createDate;
    }

    public function setDescription(String $description): void {
        $this->description = $description;
    }
    
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setPlayer(Player $player): void {
        $this->player = $player;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }

    public function setTradable(Tradable $tradable): void {
        $this->tradable = $tradable;
    }

    public function setTitle(String $title): void {
        $this->title = $title;
    }

    public function setPropertiesFromObject(? Object $object): void {
        $this->tradable = new Tradable();
        $this->tradable->setPropertiesFromObject($object);
        
        $this->id = isset($object->categoryId) ? (int) $object->categoryId : null;
        $this->name = $object->categoryName ?? null;
    }

}
