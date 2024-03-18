<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cars\Store as StoreRequest;
use App\Http\Requests\Cars\Update as UpdateRequest;
use App\Models\Car;
use App\Models\Brand;
use App\Models\Tag;
use App\Enums\Cars\Status;

class CarController extends Controller
{
    public function index()
    {
        // $cars = Car::with('brand.country')->where('status', Status::ACTIVE)->orderBy('created_at')->get();
        $cars = Car::ofActive()->with('brand.country')->get();
        $transmissions = config('app-cars.transmissions');
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $transmissions = config('app-cars.transmissions');
        $brands = Brand::orderBy('title')->pluck('title', 'id');
        $tags = Tag::orderBy('name')->pluck('name', 'id');

        return view('cars.create', compact('transmissions', 'brands', 'tags'));

    }
    public function store(StoreRequest $request)
    {
        $car = Car::create($request->validated());
        return redirect()->route('cars.show', [$car->id]);
    }

    public function show(Car $car)
    {
        // dd($car->status);
        $transmissions = config('app-cars.transmissions');
        return view('cars.show', compact('car', 'transmissions'));
    }

    public function edit(Car $car)
    {
        $transmissions = config('app-cars.transmissions');
        $brands = Brand::orderBy('title')->pluck('title', 'id');
        $tags = Tag::orderBy('name')->pluck('name', 'id');

        return view('cars.edit', compact('car', 'transmissions', 'brands', 'tags'));
    }

    public function update(UpdateRequest $request, Car $car)
    {
        $data = collect($request->validated());

        $car->update($data->except('tags')->toArray());
        $car->tags()->sync($data->get('tags'));

        return redirect()->route('cars.show', [$car->id]);
    }

    public function destroy(Car $car)
    {
        if ($car->canDelete) {
            $car->delete();
            return redirect()->route('cars.index')->with('alert', trans('alerts.cars.deleted'));
        }

        return redirect()->route('cars.show', [$car->id])->with('alert', trans('cant delete active car'));
    }

    public function trashed()
    {
        $cars = Car::onlyTrashed()->orderByDesc('created_at')->get();
        return view('cars.trashed', compact('cars'));
    }

    public function restore(string $id)
    {
        $car = Car::onlyTrashed()->findOrFail($id);

        if (Car::where('vin', $car->vin)->exists()) {
            return redirect()->route('cars.trashed')->with('alert', trans('alerts.cars.restore_fail_vin'));
        }

        $car->restore();

        return redirect()->route('cars.index')->with('alert', trans('alerts.cars.restored'));
    }
}
