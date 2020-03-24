<?php

namespace App;

// Diese Klasse überschreibt die Standard Model-Klasse.
// Hier wird die Verwendung von UUID für alle Model's implementiert, damit dies
// nicht in jeder einzelnen Model-Klasse gemacht werden muss.

use Illuminate\Database\Eloquent\Model as BaseModel;
use App\Helpers\Uuid;

class Model extends BaseModel
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Boot the Model.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($instance) {
            $instance->id = (string) UUID::v4();
        });
    }
}
