<?php

namespace Cannv\LaraMenuBuilder;

use Cannv\LaraMenuBuilder\Contracts\MenuItemInterface;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Concerns\HasAttributes;
use Illuminate\Database\Eloquent\MassAssignmentException;

class MenuItem implements MenuItemInterface
{
    use HasAttributes;

    protected $fillable = [
        'label',
        'url',
        'route',
        'class_name',
        'attr'
    ];
    public function create(array $data)
    {
        $this->fill($data);
        return $this;
    }
    private function fill(array $attr)
    {
        foreach ($attr as $k => $item) {
            $this->setAttribute($k, $item);
        }
    }
}
