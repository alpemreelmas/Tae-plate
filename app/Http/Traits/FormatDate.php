<?php

namespace App\Http\Traits;

use Carbon\Carbon;

trait FormatDate{
    public function getCreatedAtAttribute($date)
    {
        return Carbon::parse($date)->format("d/m/Y");
    }
    public function getUpdatedAtAttribute($date)
    {
        return Carbon::parse($date)->format("d/m/Y");
    }
}
