<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Cars\Store as StoreRequest;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('created_at')->get();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $transmissions = config('app-cars.transmissions');
        return view('cars.create', compact('transmissions'));

    }
    public function store(StoreRequest $request)
    {
        $car = Car::create($request->validated());
        return redirect()->route('cars.show', [$car->id]);
    }

    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
