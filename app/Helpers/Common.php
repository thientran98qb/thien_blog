<?php
namespace App\Helpers;

use App\Enums\DateTimeType;
use Carbon\Carbon;

class Common {
    public static function formatDate($date, $format = DateTimeType::DATE_FORMAT)
    {
        return $date ? Carbon::parse($date)->format($format) : '';
    }
}
