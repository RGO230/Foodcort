<?php

namespace App\Http\Resources;

use App\Http\Requests\ShawarmaRequest;
use App\Models\Shawarma;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShawarmaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {   
        
        return [
            "id"=>$this->id,
            "title" => $this->title,
            "descr" => $this->descr,
            "address"=>$this->address,
            "assortment" => $this->assortment,
            "price_from" => $this->price_from,
            "price_to" => $this->price_to,
            "img" => $this->img,
            "delivery" => $this->delivery,
            "foodcort" => $this->foodcort, 
            "service_quality" => $this->service_quality,
            "district_id" => $this->district_id,
            "coordinates"=>array('x'=>$this->longitude,'y'=>$this->latitude),
            "overall_rating" => ($this->price_from + $this->assortment + $this->service_quality) / 3,
        ];
    }
}
