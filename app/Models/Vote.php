<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Vote extends Model
{
    use HasFactory;

    public function Options ()
    {
        return $this->belongsTo(Option::class);
    }

}
