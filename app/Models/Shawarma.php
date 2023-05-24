<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\District;

class Shawarma extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = [];
    public const MARK = [1, 2, 3, 4, 5];
    public function districts()
    {

        return $this->belongsTo(District::class, 'district_id', 'id');
    }
    public function RatingCount($price_from, $assortment, $service_quality)
    {   
        $rating = 0;
        $price_mark = 0;
        if ($this->price_from >= 100 && $this->price_from <= 150) {
            $price_mark = 5;
        }
        if ($this->price_from >= 150 && $this->price_from <= 190) {
            $price_mark = 4;
        }
        if ($this->price_from > 190 && $this->price_from < 220) {
            $price_mark = 3;
        }
        if ($this->price_from > 220 && $this->price_from < 250) {
            $price_mark = 2;
        }
        if ($this->price_from >= 250) {
            $price_mark = 1;
        }
        $rating = ($price_mark + $this->assortment + $this->service_quality) / 3;
        return $rating;
    }
}
