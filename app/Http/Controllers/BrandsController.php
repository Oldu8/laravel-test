<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\Brands\Store as StoreRequest;
use App\Http\Requests\Brands\Update as UpdateRequest;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('title', 'asc')->get();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(StoreRequest $request)
    {
        Brand::create($request->validated());
        return redirect()->route('brands.index')->with('success', 'Brand created successfully.');
    }
    public function show(Brand $brand)
    {
        return view('brands.show', compact('brand'));
    }


    public function edit(Brand $brand)
    {
        return view('brands.edit', compact('brand'));
    }

    public function update(UpdateRequest $request, Brand $brand)
    {
        $brand->update($request->validated());
        return redirect()->route('brands.index')->with('success', 'Brand updated successfully.');
    }


    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully.');
    }
}
