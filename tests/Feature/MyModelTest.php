<?php

use Idfx\Example\Models\MyModel;

it('can create a model from factory', function () {
    $myModel = MyModel::factory()->create();

    $this->assertModelExists($myModel);
});


it('can return the uppercased value of a name', function () {
    $myModel = MyModel::factory()->create(['name' => 'John Doe']);

    expect($myModel->getUppercasedName())->toEqual(strtoupper('JOHN DOE'));
});
