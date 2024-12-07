<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalcOperation extends Model
{
    public static function add($first, $second)
    {
        return $first + $second;
    }
    public static function subtract($first, $second)
    {
        return $first - $second;
    }
    public static function multiply($first, $second)
    {
        return $first * $second;
    }
    public static function divide($first, $second)
    {
        if ($second == 0) {
            throw new \InvalidArgumentException('Division by zero.');
        }
        return number_format($first / $second, 1, '.','');
    }
}
