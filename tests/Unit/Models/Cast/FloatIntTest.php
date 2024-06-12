<?php

use App\Models\Cast\FloatInt;
use Illuminate\Database\Eloquent\Model;

describe('FloatInt Cast Unit Test', function(){
    it('converts int to float using get method', function () {
        $cast = new FloatInt();
        $model = Mockery::mock(Model::class);

        $value = 12345; // Representa 123.45
        $expected = 123.45;

        expect($cast->get($model, 'test', $value, []))->toBe($expected);
    });

    it('converts float to int using set method', function () {
        $cast = new FloatInt();
        $model = Mockery::mock(Model::class);

        $value = 123.45;
        $expected = 12345; // Representa 123.45

        expect($cast->set($model, 'test', $value, []))->toBe($expected);
    });

    it('handles null value in set method', function () {
        $cast = new FloatInt();
        $model = Mockery::mock(Model::class);

        $value = null;
        $expected = null;

        expect($cast->set($model, 'test', $value, []))->toBe($expected);
    });

    it('handles null value in get method', function () {
        $cast = new FloatInt();
        $model = Mockery::mock(Model::class);

        $value = null;
        $expected = null;

        expect($cast->get($model, 'test', $value, []))->toBe($expected);
    });
});
