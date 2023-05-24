<?php

namespace App\Http\Requests;

use App\Rules\PriceFromRule;
use Illuminate\Foundation\Http\FormRequest;

class ShawarmaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            'title' => 'string|required' ,
            'descr' => 'string|required',
            'assortment' => 'int|required',
            'price_from' => ['int','required','max:399','min:100'],
            'price_to' => 'int|required|max:400|min:101|gt:price_from',
            'overall_rating'=>'int',
            'file' => 'file',
            'address'=>'string|required',
            // 'delivery' => 'accepted|declined',
            // 'foodcort'=>'accepted|declined',
            'service_quality' => 'integer|required',
            'district_id' => 'exists:districts,id',
            'longitude' => 'numeric|required',
            'latitude' => 'numeric|required',
            
        ];
    }
}


