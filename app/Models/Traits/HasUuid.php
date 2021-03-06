<?php

namespace App\Models\Traits;

use Illuminate\Support\Str;

trait HasUuid
{
    public static function bootHasUuid()
    {
        static::creating(function ($model) {
            if (!$model->{$model->getKeyName()}) {
                $model->{$model->getKeyName()} = Str::uuid();
            }
        });
    }
}