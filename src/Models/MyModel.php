<?php

namespace Idfx\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 */
class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
