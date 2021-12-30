<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static DATE_TIME_FORMAT()
 * @method static static DATE_FORMAT()
 * @method static static DATE_SLASH_FORMAT()
 * @method static static DATE_TIME_SLASH_FORMAT()
 * @method static static DATE_TIME_SLASH_FULL_FORMAT()
 */
final class DateTimeType extends Enum implements LocalizedEnum
{
    public const DATE_TIME_FORMAT = 'Y-m-d H:i:s';
    public const DATE_FORMAT = 'Y-m-d';
    public const DATE_SLASH_FORMAT = 'd/m/Y';
    public const DATE_TIME_SLASH_FORMAT = 'd/m/Y H:i';
    public const DATE_TIME_SLASH_FULL_FORMAT = 'd/m/Y H:i:s';
}
