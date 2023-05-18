<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shawarma extends Model
{
    use HasFactory;
    use Filterable;
   
    protected $guarded = [];
    public const MARK = [1, 2, 3, 4, 5];
    public function districts()
    {

        return $this->belongsTo(District::class);
    }
}
