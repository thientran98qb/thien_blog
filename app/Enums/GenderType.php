<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static MALE()
 * @method static static FEMALE()
 */
final class GenderType extends Enum implements LocalizedEnum
{
    public const MALE = 'male';
    public const FEMALE = 'female';
}
