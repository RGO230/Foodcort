<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PriceFromRule implements Rule
{
    protected  $price_from;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($price_from)
    {
        $this->price_from = $price_from;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $value > $this->price_from;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Цена от должна быть ниже цены до';
    }
}
