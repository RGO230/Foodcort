<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShawarmaRequest;
use App\Models\District;
use App\Models\Shawarma;
use Illuminate\Http\Request;


class ShawarmaController extends Controller

{
    public function index()
    {

        $shawarma = Shawarma::orderBy('id', 'desc')->get();
        return view('shawarma.index')->with('shawarma', $shawarma);
    }
    public function create()
    {
        $district = District::all();
        $assortment = Shawarma::MARK;
        $service_quality = Shawarma::MARK;
        return view('shawarma.create', [
            'assortment' => $assortment,
            'service_quality' => $service_quality,
            'district' => $district,
        ]);
    }
    public function store(ShawarmaRequest $request)
    {
        $request->validated();

        $path = '';

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $imageName);
            $path = '/uploads/' . $imageName;
        }
        $shawarma = new Shawarma;
        $shawarma->title = $request->title;
        $shawarma->descr = $request->descr;
        $shawarma->assortment = $request->assortment;
        $shawarma->price_from = $request->price_from;
        $shawarma->img = $path;
        $shawarma->address=$request->address;
        $shawarma->delivery = $request->delivery == 'on' ? true : false;
        $shawarma->foodcort = $request->foodcort == 'on' ? true : false;
        $shawarma->service_quality = $request->service_quality;
        $shawarma->district_id = $request->district_id;
        $shawarma->longitude = $request->longitude;
        $shawarma->latitude = $request->latitude;
        $shawarma->price_to = $request->price_to;
        $shawarma->overall_rating = ($request->price_from + $request->assortment + $request->service_quality) / 3;
        $shawarma->save();
        return redirect()->route('shawarma.index');
    }
    public function edit(Shawarma $shawarma)
    {

        $district = District::all();
        $assortment = Shawarma::MARK;
        $service_quality = Shawarma::MARK;
        return view('shawarma.edit', [
            'shawarma' => $shawarma,
            'district' => $district,
            'assortment' => $assortment,
            'service_quality' => $service_quality,
        ]);
    }
    public function update(Shawarma $shawarma, ShawarmaRequest $request)
    {
        $request->validated();

        $path = '';

        if ($request->has('file')) {
            $value = $request->file('file');
            $ext = $value->extension();
            $imageName = uniqid() . '.' . $ext;
            $value->move(public_path() . '/uploads', $imageName);
            $path = '/uploads/' . $imageName;
        }
        $shawarma->update([
            "title" => $request->title,
            "descr" => $request->descr,
            "assortment" => $request->assortment,
            "price_to" => $request->price_to,
            "address"=>$request->address,
            "img" => $path,
            "delivery" => $request->delivery == 'on' ? true : false,
            "foodcort" => $request->foodcort == 'on' ? true : false,
            "service_quality" => $request->service_quality,
            "district_id" => $request->district_id,
            "longitude" => $request->longitude,
            "latitude" => $request->latitude,
            "price_from" => $request->price_from,
            "overall_rating" => ($request->price_from + $request->assortment + $request->service_quality) / 3,

        ]);

        return redirect()->route('shawarma.update');
    }
    public function destroy(Shawarma $shawarma)
    {
        $shawarma->delete();
        return redirect()->back();
    }
}
