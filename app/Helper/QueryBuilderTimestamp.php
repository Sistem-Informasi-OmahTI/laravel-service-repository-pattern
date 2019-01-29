<?php
namespace App\Helper;

use Carbon\Carbon;

class QueryBuilderTimestamp
{
    public static function now()
    {
        return Carbon::now();
    }

    public static function generateTimestamp()
    {
        $now = Self::now();
        return array(
            "created_at" => $now,
            "updated_at" => $now
        );
    }
}