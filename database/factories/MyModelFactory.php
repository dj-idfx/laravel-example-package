<?php

namespace Idfx\Example\Database\Factories;

use Idfx\Example\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
