<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Wallet extends Model
{
    protected $casts = [
        'data' => 'array',
    ];
    protected $fillable = [
        'type', 'transaction_reasons', 'transaction_type',
        'current', 'steps', 'balance', 'data'];


    # Relations
    public function wallettable(): MorphTo
    {
        return $this->morphTo();
    }

}
