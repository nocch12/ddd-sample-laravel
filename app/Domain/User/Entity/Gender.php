<?php declare(strict_types=1);

/**
 * 性別
 */
Enum Gender: int
{
    case Unknown       = 0;
    case Male          = 1;
    case Female        = 2;
    case NotApplicable = 9;
}