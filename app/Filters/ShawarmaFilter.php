<?php


namespace App\Filters;


use Illuminate\Database\Eloquent\Builder;

class ShawarmaFilter extends AbstractFilter
{
    public const PRICE_FROM = 'price_from';
    public const PRICE_TO = 'price_to';
    public const DELIVERY = 'delivery';
    public const DISTRICT_ID = "district_id";
    public const FOODCORT="foodcort";


    protected function getCallbacks(): array
    {
        return [
            self::PRICE_FROM => [$this, 'price_from'],
            self::PRICE_TO => [$this, 'price_to'],
            self::DISTRICT_ID => [$this, 'district_id'],
            self::FOODCORT =>[$this,'foodcort'],
            self::DELIVERY=>[$this,'delivery']
        ];
    }

    public function price_from(Builder $builder, $value)
    {
        $builder->where('price_from',$value);
    }

    public function price_to(Builder $builder, $value)
    {
        $builder->where('price_to',  $value);
    }

    public function district_id(Builder $builder, $value)
    {
        $builder->where('district_id', $value);
    }
    public function delivery(Builder $builder, $value)
    {
        $builder->where('delivery', $value);
    }
    public function foodcort(Builder $builder, $value)
    {
        $builder->where('foodcort', $value);
    }
   
}