<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $guarded = [];
    public const DISTRICTS = [
        ['title' => 'Ленинский', 'longitude' => 39.185935144117586, 'latitude' => 51.64713196494312],
        ['title' => 'Советский', 'longitude' => 39.115553979566805, 'latitude' => 51.65450006466961],
        ['title' => 'Коминтерновский', 'longitude' => 39.16584701773876, 'latitude' => 51.69631379097235],
        ['title' => 'Центральный', 'longitude' => 39.21545715567823, 'latitude' => 51.67326581652116],
        ['title' => 'Железнодорожный', 'longitude' => 39.29921301738612, 'latitude' => 51.6976915951999],
        ['title' => 'Левобережный', 'longitude' => 39.28832869420845, 'latitude' => 51.625646565383725],
        
    ];
}
