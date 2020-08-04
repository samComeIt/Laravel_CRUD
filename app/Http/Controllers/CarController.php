<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'produced_on' => 'required',
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index')->with('success','Car created successfully');
    }

    public function index(){
        $cars = Car::all();

        return view('cars.index', ['allCars' => $cars]);
    }

    public function show($id){
        $car = Car::find($id);
        return view('cars.show', array('car' => $car));
    }

    public function create(){
        return view('cars.create');
    }

    public function edit($id){
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id){
        $car = Car::find($id);
        $request->validate([
            'make'=>'required',
            'model'=>'required',
            'produced_on'=>'required',
        ]);

        $car->make = $request->get('make');
        $car->model = $request->get('model');
        $car->produced_on = $request->get('produced_on');
        $car->save();

        return view('cars.show', array('car' => $car));
    }
    

    public function destroy($id){
        $car = Car::find($id);
        $car->delete();

        $cars = Car::all();
        return view('cars.index', ['allCars' => $cars]);
    }
}
