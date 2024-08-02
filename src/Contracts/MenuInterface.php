<?php

namespace Cannv\LaraMenuBuilder\Contracts;

use Illuminate\Support\Collection;

interface MenuInterface
{
    public function getName(): string;

    public function addItem($name, $options = []);
    public function addItemBefore(string $beforeName,string $name, $options = []);
    public function addItemAfter(string $afterName,string $name, $options = []);
    public function getItems(): array;
    public function setChildrenAttribute(string $name, string $value);
    public function getChildrenAttribute();
}
