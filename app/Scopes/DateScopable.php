<?php

namespace App\Scopes;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

trait DateScopable
{
    public function scopeTwoMounthsOld(Builder $query)
    {
        $query->where('created_at', '<=', Carbon::parse('2 months ago'));
    }
}