<?php

namespace Cannv\LaraMenuBuilder;

use Cannv\LaraMenuBuilder\Contracts\MenuInterface;
use Cannv\LaraMenuBuilder\Contracts\MenuItemInterface;
use Illuminate\Support\Collection;

class Menu implements MenuInterface
{
    private string $name;
    private $items = [];
    private $childrenAttribute = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Add an item to the collection.
     *
     * @param string $name
     * @param array $options {
     * @type string $label The label for the item.
     * @type string $url The URL for the item.
     * }
     * @return $this
     * @throws \Exception
     */
    public function addItem($name, $options = [])
    {
        if (isset($this->items[$name])) {
            throw new \Exception("{$name} already exists");
        }
        $this->items[$name] = $options;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getChildItem(string $key)
    {
        return $this->items[$key] ?? null;
    }

    public function setChildrenAttribute(string $name, string $value)
    {
        if (isset($this->childrenAttribute[$name])) {
            throw new \Exception("{$name}: attribute already exists");
        }
        $this->childrenAttribute[$name] = $value;
        return $this;
    }

    public function getChildrenAttribute()
    {
        return $this->childrenAttribute;
    }
}
