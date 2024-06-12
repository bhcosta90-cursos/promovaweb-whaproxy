<?php

declare(strict_types=1);

namespace App\Models\Cast;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class FloatInt implements CastsAttributes
{
    public function get(Model $model, string $key, $value, array $attributes): ?float
    {
        if($value === null){
            return null;
        }

        return (float) (bcdiv((string) $value, '100', 2));
    }

    public function set(Model $model, string $key, $value, array $attributes): ?int
    {
        if($value === null){
            return null;
        }

        return (int) (bcmul((string) $value, '100', 2));
    }
}
