<?php

namespace Idfx\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    private string $name;

    public $guarded = [];

    public function getName(string $name): void
    {
        $this->name = $name;
    }

    public function getUppercasedName(): string
    {
        return strtoupper($this->name);
    }
}
