<?php
/**
 * Created by PhpStorm.
 * User: iwasakat
 * Date: 2018/07/30
 * Time: 14:49
 */

namespace App\Http\Validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator
{
    public function validateHello($attribute, $value, $parameters)
    {
        return $value % 2 == 0;
    }
}