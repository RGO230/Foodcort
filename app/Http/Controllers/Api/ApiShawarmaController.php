<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Models\Shawarma;
use App\Filters\ShawarmaFilter;
use App\Http\Resources\ShawarmaResource;
use App\Traits\Filterable;
use Illuminate\Http\Request;


class ApiShawarmaController extends Controller
{
    public function filtration(FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(ShawarmaFilter::class, ['queryParams' => array_filter($data)]);
        $shawarma = Shawarma::filter($filter);
        if ($request->has('assortment')) {
            $shawarma = $shawarma->orderBy('assortment', 'desc')->get();
            return response()->json(ShawarmaResource::collection($shawarma));
        } elseif ($request->has('service_quality')) {
            $shawarma = $shawarma->orderBy('service_quality', 'desc')->get();
            return response()->json(ShawarmaResource::collection($shawarma));
        } else {
            $shawarma = $shawarma->orderBy('overall_rating', 'desc')->get();
            return response()->json(ShawarmaResource::collection($shawarma));
        }
    }
}
